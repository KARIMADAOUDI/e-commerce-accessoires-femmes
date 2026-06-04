<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\CartController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/boutique', [ShopController::class, 'index'])->name('shop');
Route::get('/produit/{slug}', [ShopController::class, 'show'])->name('product.show');

Route::get('/categories', [PageController::class, 'categories'])->name('categories');
Route::get('/a-propos', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/panier', [CartController::class, 'index'])->name('cart');
