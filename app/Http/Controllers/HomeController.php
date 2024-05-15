<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;


class HomeController extends Controller
{
   public function redirect(){
   $usertype=Auth::user()->usertype;
   if($usertype=='1'){
       return view('admin.home');
    }
   else{
    $data=product::paginate(4);
    $user=auth()->user();
    $count=Cart::where('phone',$user->phone)->count();
       return view('user.home',compact('data','count'));
   }
   }
   public function user(){
    return view('user.home');
   }
   public function admin(){
    return view('admin.home');
   }
   public function index(){
    if(Auth::id()){
      return redirect('redirect') ;
    }
    else{$data=product::paginate(6);
    return view('user.home',compact('data'));}
   }
   public function showvideo(){
      return view('user.video');
   }
   public function addcart(Request $request, $id)
{
    if(Auth::check()) {
        $user = auth()->user();
        $product = Product::find($id);

        // Create a new cart instance
        $cart = new Cart();
        $cart->user_id = $user->id; // Assign the user_id directly
        $cart->product_title = $product->title;
        $cart->phone = $user->phone;
        $cart->address = $user->address;
        $cart->name=$user->name;
        $cart->price = $product->price;
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    } else {
        return redirect('login');
    }
}

public function contactus(){
    $count = 0; // Default value if user is not authenticated
    if(auth()->check()) { // Check if user is authenticated
        $user = auth()->user();
        $cart = Cart::where('phone', $user->phone)->get();
        $count = Cart::where('phone', $user->phone)->count();
    }
    return view('user.contactus', compact('count'));
}

   public function showcart(){
      $user=auth()->user();
      $cart=cart::where('phone',$user->phone)->get();
      $count=cart::where('phone',$user->phone)->count();
     // dd($cart);
      return view('user.showcart',compact('count','cart'));
   }
   public function deleteproducfromcart($id){
      $data=cart::find($id);
      $data->delete();
      return redirect()->back()->with('message','product '.$id.' is'.' deleted from cart');
      }
      public function store(Request $request)
      {
          // Retrieve cart items for the current user
          $cartItems = Cart::where('user_id', Auth::id())->get();
      
          // Create a new order
          $order = new Order();
          $order->user_id = Auth::id();
          $order->name = $cartItems->first()->name; // Assuming name is same for all items
          $order->phone = $cartItems->first()->phone; // Assuming phone is same for all items
          // Set a unique order number (you can use any logic to generate a unique order number)
          $order->order_number = uniqid();
          $order->save();
      
          // Loop through each cart item to create order items
          foreach ($cartItems as $cartItem) {
              // Create an order item for the current cart item
              $orderItem = new OrderItem();
              $orderItem->order_id = $order->id;
              $orderItem->product_title = $cartItem->product_title;
              $orderItem->quantity = $cartItem->quantity;
              $orderItem->price = $cartItem->price;
              $orderItem->save();
          }
      
          // Clear the cart after creating the order
          Cart::where('user_id', Auth::id())->delete();
      
          return redirect()->back()->with('success', 'Order placed successfully!');
      }
      


public function showOrders()
{
    // Retrieve all orders
    $orders = Order::orderBy('order_number')->get();

    // Get unique user IDs from the orders
    $userIds = $orders->pluck('user_id')->unique();

    // Retrieve users for the given user IDs
    $users = User::whereIn('id', $userIds)->get()->keyBy('id');

    // Pass the orders and users data to the view
    return view('admin.showorders', compact('orders', 'users'));
}


public function viewOrderItems($orderId)
{
    $order = Order::findOrFail($orderId);
    $orderItems = $order->items;
    return view('admin.showorderitems', compact('order', 'orderItems'));
}



}
