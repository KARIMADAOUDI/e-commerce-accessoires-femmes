<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function categories()
    {
        $categories = [
            ['name' => 'Bagues', 'image' => 'https://images.unsplash.com/photo-1605100804763-247f67b3557e'],
            ['name' => 'Bracelets', 'image' => 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a'],
            ['name' => 'Colliers', 'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f'],
            ['name' => 'Boucles d’oreilles', 'image' => 'https://images.unsplash.com/photo-1535632066927-ab7c9ab60908'],
            ['name' => 'Montres', 'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30'],
            ['name' => 'Parures', 'image' => 'https://images.unsplash.com/photo-1515562141207-7a88fb7ce338'],
        ];

        return view('frontend.categories', compact('categories'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
