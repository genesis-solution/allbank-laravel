<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use \App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'goHomePage']);

Route::get('/about', [MainController::class, 'goAbout'])->name('about');
Route::get('/service', [MainController::class, 'goService'])->name('service');
Route::get('/terms', [MainController::class, 'goTerms'])->name('terms');
Route::get('/contact', [MainController::class, 'goContact'])->name('contact');
Route::get('/blog', [MainController::class, 'goBlog'])->name('blog');
Route::get('/markets', [MainController::class, 'getMarkets'])->name('getMarkets');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [MainController::class, 'goHomePage'])->name('dashboard');
    Route::get('/pricing/{type?}', [MainController::class, 'goPricing'])->name('pricing');
    Route::post('/getConversationRate', [MainController::class, 'getConversationRate'])->name('getConversationRate');
    Route::post('/getSellConversationRate', [MainController::class, 'getSellConversationRate'])->name('getSellConversationRate');
    Route::post('/postCheckout', [MainController::class, 'postCheckout'])->name('postCheckout');
    Route::get('/checkout', [MainController::class, 'getCheckout'])->name('checkout');

    Route::post('/send-money', [PayPalController::class, 'payment'])->name('send.money');
    Route::get('paypal-payment',[PayPalController::class,"payment"])->name('paypal.payment');
    Route::get('/payment/success', [PayPalController::class, 'success'])->name('paypal.success');
    Route::get('/payment/cancel', [PayPalController::class, 'cancel'])->name('paypal.cancel');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
