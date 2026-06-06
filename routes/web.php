<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/boutique', function () {
    return view('frontend.shop');
});

Route::get('/produit/{id}', function () {
    return view('frontend.product-detail');
});

Route::get('/panier', function () {
    return view('frontend.cart');
});

Route::get('/wishlist', function () {
    return view('frontend.wishlist');
});

Route::get('/a-propos', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/collections', function () {
    return view('pages.collections');
});

Route::get('/nouveautes', function () {
    return view('pages.new-arrivals');
});

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
