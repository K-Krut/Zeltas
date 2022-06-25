<?php

use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\CheckoutController;
use App\Http\Controllers\Site\CollectionController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\MetalController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;


use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/delivery', [HomeController::class, 'delivery'])->name('delivery');
Route::get('/catalogue', [HomeController::class, 'catalogue'])->name('catalogue');

Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/search_result', [ProductController::class, 'searchProducts'])->name('search_result');


Route::get('/all_collections', [CollectionController::class, 'showAll'])->name('all_collections');
Route::get('/collection/{slug}', [CollectionController::class, 'show'])->name('collection.show');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/metal/{slug}', [MetalController::class, 'show'])->name('metal.show');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');




Route::post('/product/add/cart', [ProductController::class, 'addToCart'])->name('product.add.cart');
Route::get('/cart', [CartController::class, 'getCart'])->name('checkout.cart');
Route::get('/cart/item/{id}/remove', [CartController::class, 'removeItem'])->name('checkout.cart.remove');
Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('checkout.cart.clear');


Route::get('/contact', [MailController::class, 'contact'])->name('contact');
Route::post('/contact_form_process', [MailController::class, 'contactForm'])->name('contact_form_process');


Route::middleware('auth')->group(function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/checkout', [CheckoutController::class, 'getCheckout'])->name('checkout.index');
    Route::post('/checkout/order', [CheckoutController::class, 'placeOrder'])->name('checkout.place.order');

});



Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');

    Route::get('/forgot', [AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot_process', [AuthController::class, 'forgot'])->name('forgot_process');
});

