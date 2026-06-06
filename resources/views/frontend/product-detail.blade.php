@extends('layouts.app')

@section('content')

<div class="bg-[#fffdfb] text-[#111] font-sans">

    <!-- NAVBAR -->
    @include('partials.navbar')


    <!-- PRODUCT DETAIL -->
    <section class="max-w-7xl mx-auto px-6 py-12">

        <p class="text-sm text-gray-500 mb-8">
            Accueil / Boutique / Bracelet Éclat
        </p>

        <div class="grid lg:grid-cols-2 gap-14">

            <!-- LEFT GALLERY -->
            <div class="grid grid-cols-5 gap-5">

                <div class="space-y-4">
                    @foreach(['product1.png','product1-2.png','product1-3.png'] as $thumb)
                    <div class="w-full h-24 rounded-lg border border-[#eee6dc] bg-[#f7eee8] flex items-center justify-center cursor-pointer hover:border-[#c6923f]">
                        <img src="{{ asset('assets/images/'.$thumb) }}" class="w-full h-full object-contain p-2">
                    </div>
                    @endforeach
                </div>

                <div class="col-span-4 relative bg-[#f7eee8] rounded-2xl h-[560px] flex items-center justify-center">
                    <button class="absolute top-5 right-5 w-10 h-10 bg-white rounded-full shadow flex items-center justify-center">
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <img src="{{ asset('assets/images/product1.png') }}"
                         class="w-full h-full object-contain p-14"
                         alt="Bracelet Éclat">
                </div>

            </div>

            <!-- RIGHT INFO -->
            <div>
                <h1 class="font-serif text-5xl mb-4">Bracelet Éclat</h1>

                <div class="flex items-center gap-3 mb-4">
                    <div class="text-[#c6923f]">★★★★★</div>
                    <span class="text-sm text-gray-500">(98 avis)</span>
                </div>

                <p class="text-3xl font-bold mb-6">129 DH</p>

                <p class="text-gray-700 leading-relaxed mb-6">
                    Bracelet en acier inoxydable doré avec pendentif raffiné.
                    Résistant à l’eau et ne ternit pas. Parfait pour un usage quotidien.
                </p>

                <ul class="space-y-3 mb-6 text-gray-700">
                    <li><i class="fa-solid fa-check text-[#c6923f] mr-2"></i> Acier inoxydable premium</li>
                    <li><i class="fa-solid fa-check text-[#c6923f] mr-2"></i> Résistant à l’eau</li>
                    <li><i class="fa-solid fa-check text-[#c6923f] mr-2"></i> Ne change pas de couleur</li>
                    <li><i class="fa-solid fa-check text-[#c6923f] mr-2"></i> Hypoallergénique</li>
                </ul>

                <div class="flex items-center gap-2 mb-8 text-green-600 font-medium">
                    <i class="fa-solid fa-circle text-xs"></i>
                    En stock
                </div>

                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center border border-[#eee6dc] rounded overflow-hidden">
                        <button class="px-4 py-3 hover:bg-[#f8efe7]">-</button>
                        <input type="text" value="1" class="w-14 text-center border-x border-[#eee6dc] py-3 outline-none">
                        <button class="px-4 py-3 hover:bg-[#f8efe7]">+</button>
                    </div>
                </div>

                <a href="https://wa.me/212600000000?text=Bonjour, je veux commander Bracelet Éclat - Prix : 129 DH"
                   class="block text-center bg-[#c6923f] text-white py-4 rounded uppercase text-sm font-semibold mb-4">
                    <i class="fa-brands fa-whatsapp"></i>
                    Commander sur WhatsApp
                </a>

                <button class="w-full border border-[#111] py-4 rounded uppercase text-sm font-semibold">
                    <i class="fa-regular fa-heart"></i>
                    Ajouter à ma wishlist
                </button>
            </div>

        </div>

    </section>

    <!-- SERVICES -->
    @include('partials.services')
    <!-- TABS -->
    <section class="max-w-7xl mx-auto px-6 pb-16">
        <div class="border border-[#eee6dc] rounded-2xl bg-white overflow-hidden">

            <div class="flex gap-8 border-b border-[#eee6dc] px-8">
                <button class="py-5 text-[#c6923f] border-b-2 border-[#c6923f] font-semibold uppercase text-sm">
                    Description
                </button>
                <button class="py-5 font-semibold uppercase text-sm">
                    Informations
                </button>
                <button class="py-5 font-semibold uppercase text-sm">
                    Livraison
                </button>
                <button class="py-5 font-semibold uppercase text-sm">
                    Avis (98)
                </button>
            </div>

            <div class="grid lg:grid-cols-2 gap-10 p-8">
                <div>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Ce bracelet élégant en acier inoxydable doré est conçu pour apporter
                        une touche de brillance à votre poignet. Sa finition délicate et ses
                        petits détails brillants en font un bijou intemporel.
                    </p>

                    <ul class="space-y-3 text-gray-700">
                        <li><span class="text-[#c6923f]">•</span> Matière : Acier inoxydable 316L</li>
                        <li><span class="text-[#c6923f]">•</span> Couleur : Doré</li>
                        <li><span class="text-[#c6923f]">•</span> Longueur : Ajustable</li>
                        <li><span class="text-[#c6923f]">•</span> Poids : Léger</li>
                        <li><span class="text-[#c6923f]">•</span> Garantie : Résistant à l’eau</li>
                    </ul>
                </div>

                <div class="rounded-xl overflow-hidden bg-[#f7eee8] h-80">
                    <img src="{{ asset('assets/images/product-detail-model.jpg') }}"
                         class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </section>

    <!-- RELATED PRODUCTS -->
    <section class="max-w-7xl mx-auto px-6 pb-16">
        <h2 class="text-3xl font-bold uppercase text-center mb-8">Produits similaires</h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-7">
            @foreach([
                ['Collier Lumière','149 DH','product2.png'],
                ['Bague Élégance','99 DH','product3.png'],
                ['Boucles Perle','129 DH','product5.png'],
                ['Montre Chic','249 DH','product4.png'],
            ] as $product)

            <div class="bg-white rounded-xl overflow-hidden border border-[#eee6dc] shadow-sm">
                <div class="relative bg-[#f7eee8] h-60">
                    <img src="{{ asset('assets/images/'.$product[2]) }}" class="w-full h-full object-contain p-6">
                    <i class="fa-regular fa-heart absolute top-4 right-4 text-xl"></i>
                </div>

                <div class="p-4">
                    <h3 class="font-semibold">{{ $product[0] }}</h3>
                    <div class="text-[#c6923f] text-sm my-1">★★★★★ <span class="text-gray-400">(64)</span></div>
                    <p class="font-bold mb-3">{{ $product[1] }}</p>

                    <a href="https://wa.me/212600000000?text=Bonjour, je veux commander {{ urlencode($product[0]) }}"
                       class="block text-center bg-[#c6923f] text-white py-2 rounded text-sm">
                        <i class="fa-brands fa-whatsapp"></i>
                        Commander WhatsApp
                    </a>
                </div>
            </div>

            @endforeach
        </div>
    </section>

</div>
@include('partials.footer')
@endsection
