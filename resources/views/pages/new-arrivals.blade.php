@extends('layouts.app')

@section('content')

<div class="bg-[#fffdfb] text-[#111] font-sans">

    <!-- NAVBAR -->
  @include('partials.navbar')

    <!-- HERO NOUVEAUTES -->
    <section class="max-w-7xl mx-auto px-6 pt-14 pb-10">
        <div class="bg-[#f8efe7] rounded-2xl grid lg:grid-cols-2 items-center overflow-hidden min-h-[360px]">
            <div class="p-10 lg:p-16">
                <p class="text-[#b98632] uppercase tracking-wide font-semibold mb-4">
                    Nouvelle collection
                </p>

                <h1 class="font-serif text-5xl lg:text-6xl leading-tight mb-6">
                    Les nouveautés <br> qui brillent
                </h1>

                <p class="text-gray-700 max-w-md leading-relaxed mb-8">
                    Découvrez nos derniers modèles d’accessoires en acier inoxydable :
                    élégants, durables et parfaits pour chaque occasion.
                </p>

                <a href="#nouveaux-produits" class="bg-[#c6923f] text-white px-8 py-4 rounded uppercase text-sm font-semibold">
                    Voir les nouveautés
                </a>
            </div>

            <div class="relative h-[360px]">
                <img src="{{ asset('assets/images/new-watch.png') }}" class="absolute left-10 top-12 w-48 drop-shadow-2xl animate-float">
                <img src="{{ asset('assets/images/new-necklace.png') }}" class="absolute right-28 top-0 w-52 drop-shadow-xl animate-floatSlow">
                <img src="{{ asset('assets/images/new-ring.png') }}" class="absolute right-10 top-24 w-36 drop-shadow-xl animate-float">
                <img src="{{ asset('assets/images/new-bracelet.png') }}" class="absolute left-44 bottom-8 w-56 drop-shadow-xl animate-floatSlow">
            </div>
        </div>
    </section>

    <!-- QUICK FILTERS -->
    <section class="max-w-7xl mx-auto px-6 pb-10">
        <div class="flex flex-wrap items-center justify-center gap-4">
            @foreach(['Tous', 'Bagues', 'Bracelets', 'Colliers', 'Boucles', 'Montres', 'Parures'] as $filter)
                <button class="px-6 py-3 rounded-full border border-[#e7d8c8] hover:bg-[#c6923f] hover:text-white transition
                    {{ $filter == 'Tous' ? 'bg-[#c6923f] text-white' : 'bg-white' }}">
                    {{ $filter }}
                </button>
            @endforeach
        </div>
    </section>

    <!-- NOUVEAUX PRODUITS -->
    <section id="nouveaux-produits" class="max-w-7xl mx-auto px-6 pb-16">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold uppercase">Nouveautés</h2>
                <p class="text-gray-500 mt-1">Les derniers produits ajoutés à notre boutique</p>
            </div>

            <select class="border border-[#eee6dc] px-4 py-3 rounded bg-white text-sm">
                <option>Plus récents</option>
                <option>Prix croissant</option>
                <option>Prix décroissant</option>
            </select>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-7">
            @foreach([
                ['Bague Perle','119 DH','new1.png'],
                ['Bracelet Doré','139 DH','new2.png'],
                ['Collier Élisa','149 DH','new3.png'],
                ['Boucles Sofia','129 DH','new4.png'],
                ['Montre Élégance','259 DH','new5.png'],
                ['Parure Divine','349 DH','new6.png'],
                ['Bracelet Infinity','129 DH','new7.png'],
                ['Bague Cœur','99 DH','new8.png'],
            ] as $product)

            <div class="group bg-white rounded-xl overflow-hidden border border-[#eee6dc] shadow-sm hover:shadow-lg transition">
                <div class="relative bg-[#f7eee8] h-64">
                    <span class="absolute top-4 left-4 bg-[#c6923f] text-white text-xs px-3 py-1 rounded-full uppercase">
                        Nouveau
                    </span>

                    <button class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white flex items-center justify-center shadow">
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <img src="{{ asset('assets/images/'.$product[2]) }}"
                         class="w-full h-full object-contain p-6 group-hover:scale-105 transition duration-500">
                </div>

                <div class="p-4">
                    <h3 class="font-semibold mb-1">{{ $product[0] }}</h3>
                    <div class="text-[#c6923f] text-sm mb-1">
                        ★★★★★ <span class="text-gray-400">(24)</span>
                    </div>
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

    <!-- COLLECTION DU MOIS -->
    <section class="max-w-7xl mx-auto px-6 pb-16">
        <div class="bg-[#fff8f2] rounded-2xl grid lg:grid-cols-2 items-center overflow-hidden">
            <div class="p-10 lg:p-14">
                <p class="text-[#b98632] uppercase font-semibold mb-3">Collection du mois</p>
                <h2 class="font-serif text-5xl mb-5">Minimal Gold</h2>
                <p class="text-gray-700 leading-relaxed mb-8">
                    Une collection raffinée avec des pièces dorées simples,
                    modernes et faciles à porter chaque jour.
                </p>

                <a href="#" class="bg-black text-white px-8 py-4 rounded uppercase text-sm">
                    Découvrir la collection
                </a>
            </div>

            <div class="h-[360px] bg-[#f3e4d7]">
                <img src="{{ asset('assets/images/month-collection.jpg') }}" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- TENDANCES -->
    <section class="max-w-7xl mx-auto px-6 pb-16">
        <h2 class="text-center text-3xl font-bold uppercase mb-10">Tendances du moment</h2>

        <div class="grid md:grid-cols-3 gap-7">
            @foreach([
                ['Bijoux dorés', 'Des pièces élégantes pour un style chic.', 'trend1.jpg'],
                ['Look minimaliste', 'Des accessoires simples mais très féminins.', 'trend2.jpg'],
                ['Parures complètes', 'Des ensembles parfaits pour les occasions.', 'trend3.jpg'],
            ] as $trend)

            <div class="relative rounded-2xl overflow-hidden h-80 group">
                <img src="{{ asset('assets/images/'.$trend[2]) }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-black/25"></div>
                <div class="absolute bottom-0 p-7 text-white">
                    <h3 class="text-2xl font-serif mb-2">{{ $trend[0] }}</h3>
                    <p class="mb-4">{{ $trend[1] }}</p>
                    <button class="bg-white text-black px-5 py-2 rounded uppercase text-sm">
                        Voir plus
                    </button>
                </div>
            </div>

            @endforeach
        </div>
    </section>

    <!-- SERVICES -->
    @include('partials.services')
</div>
@include('partials.footer')
@endsection
