@extends('layouts.app')

@section('content')

<div class="bg-[#fffdfb] text-[#111] font-sans">

    <!-- NAVBAR -->
     @include('partials.navbar')


    <!-- HEADER -->
    <section class="max-w-7xl mx-auto px-6 pt-14 pb-8">
        <h1 class="font-serif text-5xl mb-3">Ma Wishlist</h1>
        <p class="text-sm text-gray-500">Accueil / Wishlist</p>
    </section>

    <!-- WISHLIST PRODUCTS -->
    <section class="max-w-7xl mx-auto px-6 pb-16">

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-7 mb-14">

            @foreach([
                ['Bracelet Éclat','129 DH','product1.png'],
                ['Collier Lumière','149 DH','product2.png'],
                ['Montre Chic','249 DH','product4.png'],
                ['Bague Royale','129 DH','product8.png'],
            ] as $product)

            <div class="group bg-white rounded-xl overflow-hidden border border-[#eee6dc] shadow-sm hover:shadow-lg transition relative">

                <button class="absolute top-4 right-4 z-10 w-8 h-8 rounded-full bg-white shadow flex items-center justify-center text-gray-500 hover:text-red-500">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <div class="bg-[#f7eee8] h-60">
                    <img src="{{ asset('assets/images/'.$product[2]) }}"
                         class="w-full h-full object-contain p-6 group-hover:scale-105 transition duration-500">
                </div>

                <div class="p-4">
                    <h3 class="font-semibold mb-1">{{ $product[0] }}</h3>

                    <div class="text-[#c6923f] text-sm mb-1">
                        ★★★★★ <span class="text-gray-400">(88)</span>
                    </div>

                    <p class="font-bold mb-4">{{ $product[1] }}</p>

                    <a href="https://wa.me/212600000000?text=Bonjour, je veux commander {{ urlencode($product[0]) }}"
                       class="block text-center bg-[#c6923f] text-white py-2 rounded text-sm">
                        <i class="fa-brands fa-whatsapp"></i>
                        Commander
                    </a>
                </div>
            </div>

            @endforeach

        </div>

        <!-- YOU MAY ALSO LIKE -->
        <div>
            <h2 class="text-2xl font-bold uppercase mb-8">Vous pourriez aimer</h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-7">

                @foreach([
                    ['Boucles Éclat','129 DH','product11.png'],
                    ['Bracelet Amour','129 DH','product6.png'],
                    ['Collier Cœur','149 DH','product7.png'],
                    ['Parure Élégance','299 DH','product9.png'],
                ] as $product)

                <div class="bg-white rounded-xl overflow-hidden border border-[#eee6dc] shadow-sm hover:shadow-lg transition">
                    <div class="relative bg-[#f7eee8] h-56">
                        <img src="{{ asset('assets/images/'.$product[2]) }}" class="w-full h-full object-contain p-6">
                        <i class="fa-regular fa-heart absolute top-4 right-4 text-xl"></i>
                    </div>

                    <div class="p-4">
                        <h3 class="font-semibold mb-1">{{ $product[0] }}</h3>
                        <p class="font-bold mb-3">{{ $product[1] }}</p>

                        <button class="w-full bg-[#c6923f] text-white py-2 rounded text-sm">
                            Ajouter
                        </button>
                    </div>
                </div>

                @endforeach

            </div>
        </div>

    </section>

    <!-- SERVICES -->
   @include('partials.services')

</div>
@include('partials.footer')
@endsection
