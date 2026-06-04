<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Bague dorée élégante',
                'slug' => 'bague-doree-elegante',
                'price' => 129,
                'image' => 'https://images.unsplash.com/photo-1603561591411-07134e71a2a9'
            ],
            [
                'name' => 'Bracelet acier inoxydable',
                'slug' => 'bracelet-acier-inoxydable',
                'price' => 149,
                'image' => 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a'
            ],
            [
                'name' => 'Collier minimaliste',
                'slug' => 'collier-minimaliste',
                'price' => 179,
                'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f'
            ],
        ];

        $categories = [
            'Bagues',
            'Bracelets',
            'Colliers',
            'Boucles d’oreilles',
            'Montres',
            'Parures',
        ];

        return view('frontend.home', compact('products', 'categories'));
    }
}
