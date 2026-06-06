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
    [
        'name' => 'Bagues',
        'slug' => 'bagues',
        'image' => 'https://images.unsplash.com/photo-1605100804763-247f67b3557e?w=400',
    ],
    [
        'name' => 'Bracelets',
        'slug' => 'bracelets',
        'image' => 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a?w=400',
    ],
    [
        'name' => 'Colliers',
        'slug' => 'colliers',
        'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=400',
    ],
    [
        'name' => 'Montres',
        'slug' => 'montres',
        'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400',
    ],
];



$bestSellers = [
    [
        'id' => 1,
        'name' => 'Bague Élégante',
        'category' => 'Bagues',
        'price' => '149 DH',
        'old_price' => '199 DH',
        'image' => 'https://images.unsplash.com/photo-1605100804763-247f67b3557e?w=400',
        'slug' => 'bague-elegante',
        'rating' => 4.5,
        'reviews' => 24,
        'badge' => 'Best Seller',
        'badge_type' => 'gold',
    ],
];
$reviews = [
    [
        'name' => 'Sara M.',
        'text' => 'Très beaux accessoires, qualité excellente et livraison rapide.',
        'avatar' => 'https://i.pravatar.cc/100?img=1',
        'product' => 'Bague Élégante',
    ],
    [
        'name' => 'Imane B.',
        'text' => 'Les bijoux sont élégants et ne changent pas de couleur.',
        'avatar' => 'https://i.pravatar.cc/100?img=2',
        'product' => 'Bracelet Doré',
    ],
    [
        'name' => 'Nadia K.',
        'text' => 'J’ai beaucoup aimé la montre et le bracelet, très chic.',
        'avatar' => 'https://i.pravatar.cc/100?img=3',
        'product' => 'Montre Chic',
    ],
];
$instagramPosts = [
    [
        'image' => 'https://images.unsplash.com/photo-1605100804763-247f67b3557e?w=400',
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a?w=400',
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=400',
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400',
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?w=400',
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=400',
    ],
];

return view('frontend.home', compact('products', 'categories', 'bestSellers', 'reviews', 'instagramPosts'));
    }
}
