@extends('layouts.app')

@section('content')

<div class="bg-[#fffdfb] text-[#111] font-sans">

    <!-- NAVBAR même style -->
   @include('partials.navbar')


    <!-- SHOP HEADER -->
    <section class="max-w-7xl mx-auto px-6 pt-12 pb-8">
        <h1 class="font-serif text-5xl mb-3">Notre Boutique</h1>
        <p class="text-sm text-gray-500">Accueil / Boutique</p>
    </section>

    <!-- SHOP CONTENT -->
    <section class="max-w-7xl mx-auto px-6 pb-16 grid lg:grid-cols-4 gap-10">

        <!-- SIDEBAR -->
        <aside class="lg:col-span-1">
            <div class="sticky top-32 space-y-8">

                <!-- CATEGORIES -->
                <div>
                    <h3 class="font-bold uppercase text-sm mb-4">Catégories</h3>
                    <div class="bg-[#fbf5ef] rounded-lg p-4 space-y-3 text-sm">
                        @foreach([
                            ['Toutes les catégories', 117],
                            ['Bagues', 25],
                            ['Bracelets', 18],
                            ['Colliers', 22],
                            ['Boucles d’oreilles', 16],
                            ['Montres', 11],
                            ['Parures', 12],
                        ] as $cat)
                        <div class="flex justify-between hover:text-[#b98632] cursor-pointer">
                            <span>{{ $cat[0] }}</span>
                            <span class="text-gray-400">({{ $cat[1] }})</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- PRICE -->
                <div>
                    <h3 class="font-bold uppercase text-sm mb-4">Filtrer par prix</h3>
                    <input type="range" min="0" max="500" class="w-full accent-[#b98632]">
                    <div class="flex justify-between text-sm text-gray-500 mt-2">
                        <span>0 DH</span>
                        <span>500 DH</span>
                    </div>
                    <button class="mt-4 w-full bg-[#c6923f] text-white py-3 rounded uppercase text-sm">
                        Filtrer
                    </button>
                </div>

                <!-- MATERIAL -->
                <div>
                    <h3 class="font-bold uppercase text-sm mb-4">Matière</h3>
                    <label class="flex items-center gap-2 text-sm">
                        <input type="checkbox" class="accent-[#b98632]">
                        Acier inoxydable
                    </label>
                </div>

                <!-- COLOR -->
                <div>
                    <h3 class="font-bold uppercase text-sm mb-4">Couleur</h3>
                    <div class="space-y-3 text-sm">
                        <label class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-[#c6923f]"></span> Doré
                        </label>
                        <label class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-gray-300"></span> Argenté
                        </label>
                        <label class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-[#d8a59b]"></span> Rose gold
                        </label>
                    </div>
                </div>

            </div>
        </aside>

        <!-- PRODUCTS -->
        <main class="lg:col-span-3">

            <!-- TOP BAR -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                <p class="text-sm text-gray-500">Afficher 1–12 sur 117 produits</p>

                <div class="flex items-center gap-3">
                    <span class="text-sm">Trier par :</span>
                    <select class="border border-[#eee6dc] px-4 py-3 rounded bg-white text-sm">
                        <option>Popularité</option>
                        <option>Nouveautés</option>
                        <option>Prix croissant</option>
                        <option>Prix décroissant</option>
                    </select>
                </div>
            </div>

            <!-- GRID -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-7">

                @foreach([
                    ['Bracelet Éclat','129 DH','product1.png'],
                    ['Collier Lumière','149 DH','product2.png'],
                    ['Bague Élégance','99 DH','product3.png'],
                    ['Boucles Perle','129 DH','product5.png'],
                    ['Montre Chic','249 DH','product4.png'],
                    ['Bracelet Amour','129 DH','product6.png'],
                    ['Collier Cœur','149 DH','product7.png'],
                    ['Bague Royale','129 DH','product8.png'],
                    ['Parure Élégance','299 DH','product9.png'],
                    ['Montre Dorée','249 DH','product10.png'],
                    ['Boucles Éclat','129 DH','product11.png'],
                    ['Bracelet Infinity','129 DH','product12.png'],
                ] as $product)

                <div class="group bg-white rounded-xl overflow-hidden border border-[#eee6dc] shadow-sm hover:shadow-lg transition">

                    <div class="relative bg-[#f7eee8] h-64">
                        <img src="{{ asset('assets/images/'.$product[2]) }}"
                             class="w-full h-full object-contain p-6 group-hover:scale-105 transition duration-500">

                        <button class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white flex items-center justify-center shadow">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>

                    <div class="p-4">
                        <h3 class="font-semibold mb-1">{{ $product[0] }}</h3>

                        <div class="text-[#c6923f] text-sm mb-1">
                            ★★★★★ <span class="text-gray-400">(98)</span>
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

            <!-- PAGINATION -->
            <div class="flex justify-center items-center gap-2 mt-12">
                <button class="w-10 h-10 border border-[#eee6dc] rounded">‹</button>
                <button class="w-10 h-10 bg-[#c6923f] text-white rounded">1</button>
                <button class="w-10 h-10 border border-[#eee6dc] rounded">2</button>
                <button class="w-10 h-10 border border-[#eee6dc] rounded">3</button>
                <button class="w-10 h-10 border border-[#eee6dc] rounded">›</button>
            </div>

        </main>
    </section>

</div>
@include('partials.footer')
@endsection
