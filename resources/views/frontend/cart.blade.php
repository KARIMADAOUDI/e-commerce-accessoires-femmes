@extends('layouts.app')

@section('content')

<div class="bg-[#fffdfb] text-[#111] font-sans">

    <!-- NAVBAR -->
     @include('partials.navbar')


    <!-- HEADER -->
    <section class="max-w-7xl mx-auto px-6 pt-14 pb-8">
        <h1 class="font-serif text-5xl mb-3">Mon Panier</h1>
        <p class="text-sm text-gray-500">Accueil / Panier</p>
    </section>

    <!-- CART -->
    <section class="max-w-7xl mx-auto px-6 pb-16 grid lg:grid-cols-3 gap-10">

        <!-- CART TABLE -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-[#eee6dc] p-6">

            <div class="hidden md:grid grid-cols-12 text-xs font-bold uppercase text-gray-500 border-b border-[#eee6dc] pb-4 mb-4">
                <div class="col-span-5">Produit</div>
                <div class="col-span-2 text-center">Prix</div>
                <div class="col-span-3 text-center">Quantité</div>
                <div class="col-span-2 text-right">Total</div>
            </div>

            @foreach([
                ['Bracelet Éclat','Doré','129 DH','product1.png',1],
                ['Collier Lumière','Doré','149 DH','product2.png',1],
                ['Bague Élégance','Doré','99 DH','product3.png',1],
            ] as $item)

            <div class="grid grid-cols-12 items-center gap-4 py-5 border-b border-[#f1e6db]">
                <div class="col-span-12 md:col-span-5 flex items-center gap-4">
                    <div class="w-20 h-20 bg-[#f7eee8] rounded-lg flex items-center justify-center">
                        <img src="{{ asset('assets/images/'.$item[3]) }}" class="w-full h-full object-contain p-2">
                    </div>

                    <div>
                        <h3 class="font-semibold">{{ $item[0] }}</h3>
                        <p class="text-sm text-gray-500">{{ $item[1] }}</p>
                    </div>
                </div>

                <div class="col-span-4 md:col-span-2 text-center font-semibold">
                    {{ $item[2] }}
                </div>

                <div class="col-span-4 md:col-span-3 flex justify-center">
                    <div class="flex items-center border border-[#eee6dc] rounded overflow-hidden">
                        <button class="px-3 py-2 hover:bg-[#f8efe7]">-</button>
                        <input type="text" value="{{ $item[4] }}" class="w-12 text-center border-x border-[#eee6dc] py-2 outline-none">
                        <button class="px-3 py-2 hover:bg-[#f8efe7]">+</button>
                    </div>
                </div>

                <div class="col-span-3 md:col-span-1 text-right font-bold">
                    {{ $item[2] }}
                </div>

                <div class="col-span-1 text-right">
                    <button class="text-gray-400 hover:text-red-500">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>

            @endforeach

            <div class="flex justify-between items-center mt-8">
                <a href="{{ url('/boutique') }}" class="border border-[#111] px-6 py-3 rounded uppercase text-sm">
                    Continuer mes achats
                </a>

                <button class="border border-[#c6923f] text-[#c6923f] px-6 py-3 rounded uppercase text-sm">
                    Mettre à jour
                </button>
            </div>
        </div>

        <!-- ORDER SUMMARY -->
        <aside class="bg-[#fff8f2] rounded-2xl border border-[#eee6dc] p-8 h-fit sticky top-32">
            <h2 class="text-xl font-bold uppercase mb-6">Résumé de la commande</h2>

            <div class="space-y-4 text-sm border-b border-[#eee6dc] pb-5 mb-5">
                <div class="flex justify-between">
                    <span>Sous-total</span>
                    <span class="font-semibold">377 DH</span>
                </div>

                <div class="flex justify-between">
                    <span>Livraison</span>
                    <span class="font-semibold">Gratuite</span>
                </div>
            </div>

            <div class="flex justify-between text-2xl font-bold mb-8">
                <span>Total</span>
                <span class="text-[#c6923f]">377 DH</span>
            </div>

            <a href="https://wa.me/212600000000?text=Bonjour, je veux confirmer ma commande:%0A- Bracelet Éclat x1 : 129 DH%0A- Collier Lumière x1 : 149 DH%0A- Bague Élégance x1 : 99 DH%0ATotal : 377 DH"
               class="block text-center bg-[#c6923f] text-white py-4 rounded uppercase text-sm font-semibold">
                <i class="fa-brands fa-whatsapp"></i>
                Commander sur WhatsApp
            </a>

            <p class="text-center text-xs text-gray-500 mt-4">
                Vous serez redirigée vers WhatsApp pour finaliser votre commande.
            </p>
        </aside>

    </section>

    <!-- SERVICES -->
   @include('partials.services')
</div>
@include('partials.footer')
@endsection
