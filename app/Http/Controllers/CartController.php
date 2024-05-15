<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

// CartController.php

class CartController extends Controller
{
    public function viewCart()
    {
        // Retrieve the user's cart from the session
        $cartItems = session()->get('cart', []);

        // Fetch the product information for each item in the cart
        foreach ($cartItems as $productId => &$item) {
            $product = Product::find($productId);

            if ($product) {
                $item['product'] = $product;
            } else {
                // Remove invalid product from the cart
                unset($cartItems[$productId]);
            }}}
    public function addToCart($productId)
    {
        // Retrieve the product based on $productId (assuming you have a Product model)
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found');
        }

        // Retrieve or initialize the cart from the session
        $cart = session()->get('cart', []);

        // Check if the product is already in the cart
        if (array_key_exists($productId, $cart)) {
            // Increment the quantity if the product is already in the cart
            $cart[$productId]['quantity']++;
        } else {
            // Add the product to the cart with a quantity of 1
            $cart[$productId] = [
                'title' => $product->title,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }

        // Store the updated cart in the session
        session()->put('cart', $cart);

        return redirect()->route('products.index')->with('success', 'Product added to cart');
    }
}

