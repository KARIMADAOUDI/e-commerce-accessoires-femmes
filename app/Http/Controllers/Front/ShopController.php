<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    private function products()
    {
        return [
            [
                'name' => 'Bague dorée élégante',
                'slug' => 'bague-doree-elegante',
                'price' => 129,
                'category' => 'Bagues',
                'image' => 'https://images.unsplash.com/photo-1603561591411-07134e71a2a9',
                'description' => 'Une bague élégante en acier inoxydable, parfaite pour un style féminin.'
            ],
            [
                'name' => 'Bracelet acier inoxydable',
                'slug' => 'bracelet-acier-inoxydable',
                'price' => 149,
                'category' => 'Bracelets',
                'image' => 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a',
                'description' => 'Bracelet moderne, résistant à l’eau et adapté au quotidien.'
            ],
            [
                'name' => 'Collier minimaliste',
                'slug' => 'collier-minimaliste',
                'price' => 179,
                'category' => 'Colliers',
                'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f',
                'description' => 'Collier chic et simple pour compléter vos tenues.'
            ],
        ];
    }

    public function index()
    {
        $products = $this->products();

        return view('frontend.shop', compact('products'));
    }

    public function show($slug)
    {
        $products = $this->products();

        $product = collect($products)->firstWhere('slug', $slug);

        abort_if(!$product, 404);

        $similarProducts = collect($products)
            ->where('slug', '!=', $slug)
            ->take(3);

        return view('frontend.product-detail', compact('product', 'similarProducts'));
    }
}
