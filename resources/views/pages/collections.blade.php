@extends('layouts.app')

@section('content')

<div class="bg-[#fffdfb] text-[#111] font-sans">

    <!-- NAVBAR -->
    @include('partials.navbar')

    <!-- HERO COLLECTIONS -->
    <section class="max-w-7xl mx-auto px-6 pt-14 pb-10">
        <div class="bg-[#f8efe7] rounded-2xl grid lg:grid-cols-2 items-center overflow-hidden min-h-[360px]">
            <div class="p-10 lg:p-16">
                <p class="text-[#b98632] uppercase tracking-wide font-semibold mb-4">
                    Nos collections
                </p>

                <h1 class="font-serif text-5xl lg:text-6xl leading-tight mb-6">
                    Des bijoux pour <br> chaque style
                </h1>

                <p class="text-gray-700 max-w-md leading-relaxed mb-8">
                    Explorez nos collections d’accessoires féminins en acier inoxydable :
                    élégance quotidienne, soirées, cadeaux et parures complètes.
                </p>

                <a href="#collections" class="bg-[#c6923f] text-white px-8 py-4 rounded uppercase text-sm font-semibold">
                    Découvrir les collections
                </a>
            </div>

            <div class="relative h-[360px]">
                <img src="{{ asset('assets/images/collection-rings.png') }}" class="absolute right-16 top-8 w-64 drop-shadow-2xl animate-float">
                <img src="{{ asset('assets/images/collection-necklace.png') }}" class="absolute left-20 top-4 w-52 drop-shadow-xl animate-floatSlow">
                <img src="{{ asset('assets/images/collection-watch.png') }}" class="absolute left-36 bottom-6 w-44 drop-shadow-xl animate-float">
            </div>
        </div>
    </section>

    <!-- COLLECTION CARDS -->
    <section id="collections" class="max-w-7xl mx-auto px-6 pb-16">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold uppercase">Choisissez votre collection</h2>
            <div class="w-16 h-[2px] bg-[#c6923f] mx-auto mt-3"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">
            @foreach([
                ['Collection Minimal Gold','Bijoux dorés simples et élégants pour tous les jours.','collection1.jpg'],
                ['Collection Élégance','Des pièces raffinées pour un look chic et féminin.','collection2.jpg'],
                ['Collection Parures','Des ensembles complets pour occasions et cadeaux.','collection3.jpg'],
                ['Collection Montres','Montres féminines en acier inoxydable premium.','collection4.jpg'],
                ['Collection Cœur','Bracelets, colliers et bagues avec détails cœur.','collection5.jpg'],
                ['Collection Cadeaux','Sélection parfaite pour offrir à une personne spéciale.','collection6.jpg'],
            ] as $collection)

            <div class="group relative rounded-2xl overflow-hidden h-96 bg-[#f7eee8] shadow-sm border border-[#eee6dc]">
                <img src="{{ asset('assets/images/'.$collection[2]) }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

                <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-black/10 to-transparent"></div>

                <div class="absolute bottom-0 p-7 text-white">
                    <h3 class="font-serif text-3xl mb-2">{{ $collection[0] }}</h3>
                    <p class="mb-5 text-white/90">{{ $collection[1] }}</p>
                    <a href="#" class="bg-white text-black px-6 py-3 rounded uppercase text-sm">
                        Voir la collection
                    </a>
                </div>
            </div>

            @endforeach
        </div>
    </section>

    <!-- FEATURED COLLECTION -->
    <section class="max-w-7xl mx-auto px-6 pb-16">
        <div class="bg-[#fff8f2] rounded-2xl grid lg:grid-cols-2 items-center overflow-hidden border border-[#eee6dc]">
            <div class="h-[420px]">
                <img src="{{ asset('assets/images/featured-collection.jpg') }}" class="w-full h-full object-cover">
            </div>

            <div class="p-10 lg:p-14">
                <p class="text-[#b98632] uppercase font-semibold mb-3">Collection vedette</p>
                <h2 class="font-serif text-5xl mb-5">Élégance & Modernité</h2>
                <p class="text-gray-700 leading-relaxed mb-8">
                    Une sélection premium de bagues, bracelets, colliers et boucles d’oreilles,
                    conçue pour les femmes qui aiment un style doux, chic et durable.
                </p>

                <div class="grid grid-cols-3 gap-4 mb-8">
                    <div class="bg-white p-4 rounded text-center">
                        <p class="font-bold text-2xl text-[#c6923f]">20+</p>
                        <p class="text-sm text-gray-500">Produits</p>
                    </div>
                    <div class="bg-white p-4 rounded text-center">
                        <p class="font-bold text-2xl text-[#c6923f]">100%</p>
                        <p class="text-sm text-gray-500">Acier</p>
                    </div>
                    <div class="bg-white p-4 rounded text-center">
                        <p class="font-bold text-2xl text-[#c6923f]">New</p>
                        <p class="text-sm text-gray-500">Modèles</p>
                    </div>
                </div>

                <a href="#" class="bg-[#c6923f] text-white px-8 py-4 rounded uppercase text-sm">
                    Découvrir maintenant
                </a>
            </div>
        </div>
    </section>

    <!-- MINI PRODUCT PREVIEW -->
    <section class="max-w-7xl mx-auto px-6 pb-16">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold uppercase">Produits des collections</h2>
                <p class="text-gray-500 mt-1">Quelques pièces sélectionnées pour vous</p>
            </div>

            <a href="{{ url('/boutique') }}" class="border border-[#c6923f] text-[#c6923f] px-6 py-3 rounded uppercase text-sm">
                Voir boutique
            </a>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-7">
            @foreach([
                ['Bracelet Élégance','129 DH','product1.png'],
                ['Collier Minimal','149 DH','product2.png'],
                ['Bague Divine','99 DH','product3.png'],
                ['Parure Chic','299 DH','product9.png'],
            ] as $product)

            <div class="bg-white rounded-xl overflow-hidden border border-[#eee6dc] shadow-sm">
                <div class="relative bg-[#f7eee8] h-60">
                    <img src="{{ asset('assets/images/'.$product[2]) }}" class="w-full h-full object-contain p-6">
                    <i class="fa-regular fa-heart absolute top-4 right-4 text-xl"></i>
                </div>

                <div class="p-4">
                    <h3 class="font-semibold">{{ $product[0] }}</h3>
                    <div class="text-[#c6923f] text-sm my-1">★★★★★ <span class="text-gray-400">(65)</span></div>
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
