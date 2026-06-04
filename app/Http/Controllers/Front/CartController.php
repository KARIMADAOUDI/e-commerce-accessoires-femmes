<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = [
            [
                'name' => 'Bague dorée élégante',
                'price' => 129,
                'quantity' => 1,
                'image' => 'https://images.unsplash.com/photo-1603561591411-07134e71a2a9'
            ],
            [
                'name' => 'Bracelet acier inoxydable',
                'price' => 149,
                'quantity' => 2,
                'image' => 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a'
            ],
        ];

        $total = collect($cartItems)->sum(fn($item) => $item['price'] * $item['quantity']);

        return view('frontend.cart', compact('cartItems', 'total'));
    }
}
