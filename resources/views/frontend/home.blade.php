@extends('layouts.app')

@section('content')

<div class="bg-[#fffdfb] text-[#111] font-sans">

    <!-- NAVBAR -->

 @include('partials.navbar')


    <!-- HERO -->
    <section class="max-w-7xl mx-auto px-6 pt-20 pb-16 grid lg:grid-cols-2 gap-10 items-center">
        <div>
            <p class="text-[#b98632] uppercase tracking-wide font-semibold mb-4">
                Acier inoxydable premium
            </p>

            <h1 class="font-serif text-6xl lg:text-7xl leading-tight mb-6">
                L’élégance <br> qui vous sublime
            </h1>

            <p class="text-lg text-gray-700 max-w-md leading-relaxed mb-8">
                Découvrez notre collection d’accessoires féminins en acier inoxydable.
                Durables, résistants et conçus pour briller chaque jour.
            </p>

            <div class="flex gap-4">
                <a href="#products" class="bg-[#c6923f] text-white px-8 py-4 rounded font-semibold uppercase text-sm">
                    Découvrir la collection
                </a>

                <a href="https://wa.me/212600000000" class="border border-black px-8 py-4 rounded font-semibold uppercase text-sm flex items-center gap-2">
                    <i class="fa-brands fa-whatsapp"></i>
                    Commander sur WhatsApp
                </a>
            </div>
        </div>

        <div class="relative h-[520px]">
            <img src="{{ asset('assets/images/watch.png') }}" class="absolute left-20 top-5 w-52 drop-shadow-2xl animate-float">
            <img src="{{ asset('assets/images/necklace.png') }}" class="absolute right-24 -top-12 w-56 drop-shadow-xl animate-floatSlow">
            <img src="{{ asset('assets/images/ring.png') }}" class="absolute right-10 top-28 w-36 drop-shadow-xl animate-float">
            <img src="{{ asset('assets/images/bracelet.png') }}" class="absolute left-52 top-260 w-56 drop-shadow-xl animate-floatSlow">
            <img src="{{ asset('assets/images/earrings.png') }}" class="absolute right-40 bottom-20 w-36 drop-shadow-xl animate-float">
        </div>
    </section>

    <!-- SERVICES -->
   @include('partials.services')

    <!-- CATEGORIES -->
    <section class="border-t border-b border-[#eee6dc] py-8">
        <h2 class="text-center text-3xl font-bold uppercase mb-2">Catégories</h2>
        <div class="w-16 h-[2px] bg-[#c6923f] mx-auto mb-8"></div>

        <div class="max-w-7xl mx-auto px-6 flex items-center gap-8 overflow-x-auto">
            @foreach([
                ['Bagues','cat-ring.png'],
                ['Bracelets','cat-bracelet.png'],
                ['Colliers','cat-necklace.png'],
                ['Boucles d’oreilles','cat-earrings.png'],
                ['Montres','cat-watch.png'],
                ['Parures','cat-set.png']
            ] as $cat)
            <div class="min-w-[160px] text-center">
                <div class="w-36 h-36 mx-auto rounded-full bg-[#f5ebe4] flex items-center justify-center mb-4">
                    <img src="{{ asset('assets/images/'.$cat[1]) }}" class="w-28 h-28 object-contain">
                </div>
                <h3 class="font-semibold">{{ $cat[0] }}</h3>
            </div>
            @endforeach
        </div>
    </section>

    <!-- BEST SELLERS -->
    <section id="products" class="max-w-7xl mx-auto px-6 py-10">
        <h2 class="text-center text-3xl font-bold uppercase mb-8">Best Sellers</h2>

        <div class="grid lg:grid-cols-5 gap-6">

            <div class="lg:col-span-2 rounded-xl overflow-hidden bg-[#f3e4d7] relative min-h-[280px]">
                <img src="{{ asset('assets/images/promo.jpg') }}" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-white/20"></div>
                <div class="relative p-8">
                    <h3 class="text-2xl font-bold uppercase">Collection <br> Été 2024</h3>
                    <p class="mt-8 text-lg">Jusqu’à</p>
                    <p class="text-6xl font-serif text-[#c6923f]">-30%</p>
                    <button class="mt-6 bg-black text-white px-6 py-3 rounded uppercase text-sm">
                        Découvrir maintenant
                    </button>
                </div>
            </div>

            @foreach([
                ['Bracelet Éclat','129 DH','product1.png'],
                ['Collier Lumière','149 DH','product2.png'],
                ['Bague Élégance','99 DH','product3.png'],
                ['Montre Chic','249 DH','product4.png']
            ] as $product)
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-[#eee6dc]">
                <div class="relative bg-[#f7eee8] h-52">
                    <img src="{{ asset('assets/images/'.$product[2]) }}" class="w-full h-full object-contain p-5">
                    <i class="fa-regular fa-heart absolute top-4 right-4 text-xl"></i>
                </div>

                <div class="p-4">
                    <h3 class="font-semibold">{{ $product[0] }}</h3>
                    <div class="text-[#c6923f] text-sm my-1">★★★★★ <span class="text-gray-500">(98)</span></div>
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

    <!-- NEW COLLECTION -->
    <section class="max-w-7xl mx-auto px-6 pb-10">
        <div class="bg-[#fff8f2] rounded-xl grid lg:grid-cols-3 items-center overflow-hidden">
            <img src="{{ asset('assets/images/new-collection.jpg') }}" class="w-full h-56 object-cover">
            <div class="p-8">
                <p class="text-[#c6923f] uppercase font-semibold">Nouvelle collection</p>
                <h2 class="font-serif text-4xl my-3">Élégance & Modernité</h2>
                <p class="text-gray-600 mb-5">Des pièces uniques pour chaque moment de votre vie.</p>
                <button class="bg-[#c6923f] text-white px-6 py-3 rounded uppercase text-sm">Découvrir</button>
            </div>
            <img src="{{ asset('assets/images/rings-group.png') }}" class="w-full h-56 object-contain p-8">
        </div>
    </section>

    <!-- WHY -->
    <section class="border-t border-b border-[#eee6dc] py-8">
        <h2 class="text-center text-2xl font-bold uppercase mb-8">
            Pourquoi choisir l’acier inoxydable ?
        </h2>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-5 gap-6 text-center">
            @foreach([
                ['fa-droplet','Résiste à l’eau','Parfait pour un usage quotidien'],
                ['fa-medal','Ne rouille pas','Conçu pour durer longtemps'],
                ['fa-sun','Ne change pas de couleur','Toujours aussi éclatant'],
                ['fa-hand-holding-heart','Hypoallergénique','Convient aux peaux sensibles'],
                ['fa-shield','Durable','Excellent rapport qualité/prix']
            ] as $why)
            <div>
                <i class="fa-solid {{ $why[0] }} text-3xl text-[#c6923f] mb-3"></i>
                <h4 class="font-bold">{{ $why[1] }}</h4>
                <p class="text-sm text-gray-600">{{ $why[2] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- AVIS + INSTAGRAM -->
    <section class="max-w-7xl mx-auto px-6 py-10 grid lg:grid-cols-3 gap-8">
        <div>
            <h3 class="font-bold uppercase mb-4">Avis clientes</h3>
            <p class="text-gray-700 mb-3">
                “Très belle qualité, j’adore ! Les bijoux sont encore plus beaux en vrai et la livraison était rapide.”
            </p>
            <div class="text-[#c6923f]">★★★★★</div>
            <p class="mt-2">— Salma, Casablanca</p>
        </div>

        <div class="lg:col-span-2">
            <h3 class="font-bold uppercase mb-4">Suivez-nous sur Instagram</h3>
            <div class="grid grid-cols-5 gap-3">
                @foreach(['insta1.jpg','insta2.jpg','insta3.jpg','insta4.jpg','insta5.jpg'] as $img)
                <img src="{{ asset('assets/images/'.$img) }}" class="h-28 w-full object-cover rounded">
                @endforeach
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <section class="bg-[#f5eadf] py-8">
        <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-5">
                <i class="fa-regular fa-envelope text-5xl text-[#c6923f]"></i>
                <div>
                    <h3 class="text-xl font-bold uppercase">Recevez nos nouveautés</h3>
                    <p>Inscrivez-vous à notre newsletter et profitez d’offres exclusives.</p>
                </div>
            </div>

            <div class="flex w-full lg:w-[500px]">
                <input type="email" placeholder="Votre adresse e-mail" class="flex-1 px-5 py-4 rounded-l border-none">
                <button class="bg-[#c6923f] text-white px-8 rounded-r uppercase">S’inscrire</button>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
   @include('partials.footer')
</div>

@endsection
