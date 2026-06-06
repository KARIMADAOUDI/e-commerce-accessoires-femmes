@extends('layouts.app')

@section('content')

<div class="bg-[#fffdfb] text-[#111] font-sans">

    <!-- HEADER -->
        <!-- NAVBAR -->
     @include('partials.navbar')

    <section class="max-w-7xl mx-auto px-6 py-14">

        <h1 class="font-serif text-5xl mb-3">
            Contactez-nous
        </h1>

        <p class="text-sm text-gray-500 mb-12">
            Accueil / Contact
        </p>

        <div class="grid lg:grid-cols-2 gap-12 items-start">

            <!-- LEFT -->
            <div>

                <div class="space-y-8">

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#f8efe7] flex items-center justify-center text-[#c6923f]">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>

                        <div>
                            <h3 class="font-semibold mb-1">
                                WhatsApp
                            </h3>

                            <p class="text-gray-600">
                                +212 6 57 44 11 80
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#f8efe7] flex items-center justify-center text-[#c6923f]">
                            <i class="fa-brands fa-instagram"></i>
                        </div>

                        <div>
                            <h3 class="font-semibold mb-1">
                                Instagram
                            </h3>

                            <p class="text-gray-600">
                                @luxea_jewelry
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#f8efe7] flex items-center justify-center text-[#c6923f]">
                            <i class="fa-regular fa-envelope"></i>
                        </div>

                        <div>
                            <h3 class="font-semibold mb-1">
                                Email
                            </h3>

                            <p class="text-gray-600">
                                contact@luxea.ma
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#f8efe7] flex items-center justify-center text-[#c6923f]">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <h3 class="font-semibold mb-1">
                                Adresse
                            </h3>

                            <p class="text-gray-600">
                                Fès, Maroc
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#f8efe7] flex items-center justify-center text-[#c6923f]">
                            <i class="fa-regular fa-clock"></i>
                        </div>

                        <div>
                            <h3 class="font-semibold mb-1">
                                Horaires
                            </h3>

                            <p class="text-gray-600">
                                Lun - Sam : 09h00 - 18h00
                            </p>
                        </div>
                    </div>

                </div>

                <!-- SOCIAL -->
                <div class="mt-12">

                    <h3 class="font-semibold mb-4">
                        Suivez-nous
                    </h3>

                    <div class="flex gap-4">

                        <a href="#" class="w-12 h-12 rounded-full border border-[#e7d8c8] flex items-center justify-center hover:bg-[#c6923f] hover:text-white transition">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="#" class="w-12 h-12 rounded-full border border-[#e7d8c8] flex items-center justify-center hover:bg-[#c6923f] hover:text-white transition">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="#" class="w-12 h-12 rounded-full border border-[#e7d8c8] flex items-center justify-center hover:bg-[#c6923f] hover:text-white transition">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>

                        <a href="#" class="w-12 h-12 rounded-full border border-[#e7d8c8] flex items-center justify-center hover:bg-[#c6923f] hover:text-white transition">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>

                    </div>

                </div>

            </div>

            <!-- FORM -->
            <div class="bg-white border border-[#eee6dc] rounded-2xl p-8 shadow-sm">

                <form>

                    <div class="grid md:grid-cols-2 gap-5 mb-5">

                        <input
                            type="text"
                            placeholder="Nom complet"
                            class="w-full border border-[#e7d8c8] rounded-lg px-4 py-3 focus:outline-none focus:border-[#c6923f]"
                        >

                        <input
                            type="email"
                            placeholder="Email"
                            class="w-full border border-[#e7d8c8] rounded-lg px-4 py-3 focus:outline-none focus:border-[#c6923f]"
                        >

                    </div>

                    <div class="mb-5">

                        <input
                            type="text"
                            placeholder="Sujet"
                            class="w-full border border-[#e7d8c8] rounded-lg px-4 py-3 focus:outline-none focus:border-[#c6923f]"
                        >

                    </div>

                    <div class="mb-6">

                        <textarea
                            rows="6"
                            placeholder="Votre message"
                            class="w-full border border-[#e7d8c8] rounded-lg px-4 py-3 focus:outline-none focus:border-[#c6923f]"
                        ></textarea>

                    </div>

                    <button
                        type="submit"
                        class="bg-[#c6923f] text-white px-8 py-4 rounded-lg uppercase text-sm font-semibold hover:opacity-90 transition"
                    >
                        Envoyer le message
                    </button>

                </form>

            </div>

        </div>

    </section>

    <!-- MAP -->
    <section class="max-w-7xl mx-auto px-6 pb-14">

        <div class="rounded-2xl overflow-hidden border border-[#eee6dc]">

            <iframe
                src="https://maps.google.com/maps?q=Fes%20Morocco&t=&z=13&ie=UTF8&iwloc=&output=embed"
                width="100%"
                height="450"
                style="border:0;"
                loading="lazy">
            </iframe>

        </div>

    </section>

</div>
@include('partials.footer')
@endsection
