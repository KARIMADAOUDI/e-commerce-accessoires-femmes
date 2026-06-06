@extends('layouts.app')

@section('content')

<div class="bg-[#fffdfb] text-[#111] font-sans">

    <!-- NAVBAR -->
     @include('partials.navbar')


    <!-- ABOUT -->
    <section class="max-w-7xl mx-auto px-6 py-14">
        <h1 class="font-serif text-5xl mb-3">À propos de Luxéa</h1>
        <p class="text-sm text-gray-500 mb-10">Accueil / À propos</p>

        <div class="grid lg:grid-cols-2 gap-14 items-center">
            <div>
                <h2 class="font-serif text-3xl mb-5">Notre histoire</h2>

                <p class="text-gray-700 leading-relaxed mb-8">
                    Luxéa est née d’une passion pour l’élégance et la qualité.
                    Nous sélectionnons avec soin des accessoires féminins en acier
                    inoxydable pour offrir chaque femme un style chic, durable et raffiné.
                </p>

                <h2 class="font-serif text-3xl mb-5">Notre mission</h2>

                <p class="text-gray-700 leading-relaxed mb-8">
                    Offrir des bijoux élégants, résistants et accessibles à toutes,
                    tout en garantissant une expérience client simple, rapide et sécurisée.
                </p>

                <div class="space-y-5">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#f8efe7] flex items-center justify-center text-[#c6923f]">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Qualité premium</h4>
                            <p class="text-sm text-gray-600">Des matières sélectionnées avec soin.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#f8efe7] flex items-center justify-center text-[#c6923f]">
                            <i class="fa-solid fa-shield-heart"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Satisfaction garantie</h4>
                            <p class="text-sm text-gray-600">Remboursement sous 7 jours.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#f8efe7] flex items-center justify-center text-[#c6923f]">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Livraison rapide</h4>
                            <p class="text-sm text-gray-600">Livraison partout au Maroc.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl overflow-hidden bg-[#f7eee8]">
                <img src="{{ asset('assets/images/about-model.jpg') }}"
                     class="w-full h-[620px] object-cover"
                     alt="Bijoux femme acier inoxydable">
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="max-w-7xl mx-auto px-6 pb-14">
        <div class="bg-[#fff8f2] rounded-2xl border border-[#eee6dc] grid md:grid-cols-4 text-center">
            <div class="p-8">
                <h3 class="font-serif text-4xl text-[#c6923f]">1000+</h3>
                <p class="text-gray-600">Clientes satisfaites</p>
            </div>

            <div class="p-8 border-l border-[#eee6dc]">
                <h3 class="font-serif text-4xl text-[#c6923f]">5000+</h3>
                <p class="text-gray-600">Commandes livrées</p>
            </div>

            <div class="p-8 border-l border-[#eee6dc]">
                <h3 class="font-serif text-4xl text-[#c6923f]">50+</h3>
                <p class="text-gray-600">Nouveaux modèles</p>
            </div>

            <div class="p-8 border-l border-[#eee6dc]">
                <h3 class="font-serif text-4xl text-[#c6923f]">100%</h3>
                <p class="text-gray-600">Satisfaction garantie</p>
            </div>
        </div>
    </section>

    <!-- VALUES -->
    <section class="border-t border-b border-[#eee6dc] py-8">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-6 text-center">
            @foreach([
                ['fa-truck','Livraison gratuite','Partout au Maroc'],
                ['fa-lock','Paiement sécurisé','100% sécurisé'],
                ['fa-award','Satisfaction garantie','Remboursement 7 jours'],
                ['fa-headset','Service client 7/7','Nous sommes là pour vous'],
            ] as $item)

            <div>
                <i class="fa-solid {{ $item[0] }} text-3xl text-[#c6923f] mb-3"></i>
                <h4 class="font-bold uppercase text-sm">{{ $item[1] }}</h4>
                <p class="text-sm text-gray-600">{{ $item[2] }}</p>
            </div>

            @endforeach
        </div>
    </section>

</div>
@include('partials.footer')
@endsection
