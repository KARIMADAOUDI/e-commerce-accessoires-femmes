<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\OrderAdminController;
use App\Http\Controllers\Admin\SettingAdminController;
use App\Http\Controllers\Admin\PromotionAdminController;

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
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('categories', CategoryAdminController::class);
        Route::resource('products', ProductAdminController::class);
        Route::get('/orders', [OrderAdminController::class, 'index'])
            ->name('orders.index');

        Route::get('/orders/{order}', [OrderAdminController::class, 'show'])
            ->name('orders.show');

        Route::put('/orders/{order}/status', [OrderAdminController::class, 'updateStatus'])
            ->name('orders.status');
        Route::get('/settings', [SettingAdminController::class, 'edit'])
            ->name('settings.edit');

        Route::put('/settings', [SettingAdminController::class, 'update'])
            ->name('settings.update');
        Route::resource('promotions', PromotionAdminController::class);
    });