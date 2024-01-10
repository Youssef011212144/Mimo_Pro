<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
   public function redirect(){
   $usertype=Auth::user()->usertype;
   if($usertype=='1'){
       return view('admin.home');
    }
   else{
    $data=product::paginate(4);
       return view('user.home',compact('data'));
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
    else{$data=product::paginate(4);
    return view('user.home',compact('data'));}
   }
   
}
