<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;





use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/
/*route::get('/login',function(){return view('login');} );
route::get('/registration',function(){return view('registration');} );*/
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/contactus',[HomeController::class,'contactus'])->name('contactus');
Route::post('/contact',[AdminController::class,'contact']);


//Route::get('/',[HomeController::class,'user']);
Route::get('/admin',[HomeController::class,'admin']);
Route::get('/',[HomeController::class,'index']);
Route::get('/product',[AdminController::class,'product']);
Route::post('/uploadproduct',[AdminController::class,'uploadproduct']);
Route::get('/showvideo',[AdminController::class,'showvideo'])->name('showvideo');
Route::post('/addvideo',[AdminController::class,'addvideo']);
Route::get('/showvideopage',[AdminController::class,'showvideo1'])->name('showvideopage');


Route::get('/showproduct',[AdminController::class,'showproduct']);
Route::get('/testlogin',[AdminController::class,'testlogin']);
//Route::get('/showvideo',[HomeController::class,'showvideo']);
//Route::get('video-upload', [ VideoController::class, 'getVideoUploadForm' ])->name('get.video.upload');
//Route::post('video-upload', [ VideoController::class, 'uploadVideo' ])->name('store.video');
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
// routes/web.php
Route::get('/view-cart',[CartController::class,'viewCart'])->name('viewCart');
Route::post('/checkout', 'CartController@checkout')->name('checkout');
// Example routes in web.php
//Route::get('/', [ProductController::class,''])->name('products.index');
//Route::post('/add-to-cart/{productId}', 'CartController@addToCart')->name('addToCart');
Route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);
Route::get('/deleteproducfromcart/{id}',[HomeController::class,'deleteproducfromcart'])->name('deleteproductfromcart');

Route::get('/updateimagehomepage/{id}',[AdminController::class,'updateimagehomepage']);
Route::post('/updateviewimagehome/{id}',[AdminController::class,'updateviewimagehome']);
Route::post('addcart/{id}',[HomeController::class,'addcart']);
Route::get('showcart',[HomeController::class,'showcart']);
Route::post('/store',[HomeController::class,'store'])->name('placeorder');
Route::get('/showorders', [HomeController::class, 'showOrders'])->name('showorders');
Route::get('/orders/{orderId}/items',[HomeController::class, 'viewOrderItems'] )->name('viewOrderItems');










