<footer class="bg-[#faf7f3] border-t border-[#eee6dc] mt-20">

    <!-- Newsletter -->
    <section class="border-b border-[#eee6dc]">
        <div class="max-w-7xl mx-auto px-6 py-10">

            <div class="grid lg:grid-cols-2 gap-8 items-center">

                <div>
                    <h3 class="text-3xl font-serif mb-3">
                        Recevez nos nouveautés
                    </h3>

                    <p class="text-gray-600">
                        Inscrivez-vous pour recevoir nos nouvelles collections et offres exclusives.
                    </p>
                </div>

                <form class="flex flex-col sm:flex-row gap-3">
                    <input
                        type="email"
                        placeholder="Votre adresse e-mail"
                        class="flex-1 px-5 py-4 border border-[#ddd] rounded-lg focus:outline-none focus:border-[#c6923f]"
                    >

                    <button
                        type="submit"
                        class="bg-[#c6923f] hover:bg-[#b8842f] text-white px-8 py-4 rounded-lg transition">
                        S'inscrire
                    </button>
                </form>

            </div>

        </div>
    </section>

    <!-- Footer principal -->
    <div class="max-w-7xl mx-auto px-6 py-14">

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Logo -->
            <div>

                <h2 class="text-4xl font-serif leading-none">
                    LUXÉA
                </h2>

                <p class="text-[11px] tracking-[0.35em] text-[#c6923f] uppercase mb-5">
                    Jewelry
                </p>

                <p class="text-gray-600 leading-relaxed">
                    Accessoires féminins en acier inoxydable.
                    Élégance, qualité et durabilité pour sublimer votre quotidien.
                </p>

            </div>

            <!-- Liens -->
            <div>

                <h4 class="font-bold uppercase text-sm mb-5">
                    Navigation
                </h4>

                <ul class="space-y-3 text-gray-600">

                    <li><a href="{{ url('/') }}" class="hover:text-[#c6923f]">Accueil</a></li>

                    <li><a href="{{ url('/boutique') }}" class="hover:text-[#c6923f]">Boutique</a></li>

                    <li><a href="{{ url('/nouveautes') }}" class="hover:text-[#c6923f]">Nouveautés</a></li>

                    <li><a href="{{ url('/collections') }}" class="hover:text-[#c6923f]">Collections</a></li>

                </ul>

            </div>

            <!-- Informations -->
            <div>

                <h4 class="font-bold uppercase text-sm mb-5">
                    Informations
                </h4>

                <ul class="space-y-3 text-gray-600">

                    <li>Livraison & Retours</li>

                    <li>Conditions générales</li>

                    <li>Politique de confidentialité</li>

                    <li>FAQ</li>

                </ul>

            </div>

            <!-- Contact -->
            <!-- Contact -->
<div>

    <h4 class="font-bold uppercase text-sm mb-5">
        Contact
    </h4>

    <div class="space-y-4 text-gray-600">

        <div class="flex items-center gap-3">
            <i class="fa-solid fa-location-dot text-[#c6923f]"></i>
            <span>Fès, Maroc</span>
        </div>

        <div class="flex items-center gap-3">
            <i class="fa-solid fa-phone text-[#c6923f]"></i>
            <span>+212 6 XX XX XX XX</span>
        </div>

        <div class="flex items-center gap-3">
            <i class="fa-solid fa-envelope text-[#c6923f]"></i>
            <span>contact@luxea.ma</span>
        </div>

    </div>

    <div class="flex gap-4 mt-6 text-xl">

        <a href="#" class="w-10 h-10 rounded-full border border-[#e7d8c8] flex items-center justify-center hover:bg-[#c6923f] hover:text-white transition">
            <i class="fa-brands fa-instagram"></i>
        </a>

        <a href="#" class="w-10 h-10 rounded-full border border-[#e7d8c8] flex items-center justify-center hover:bg-[#c6923f] hover:text-white transition">
            <i class="fa-brands fa-facebook-f"></i>
        </a>

        <a href="#" class="w-10 h-10 rounded-full border border-[#e7d8c8] flex items-center justify-center hover:bg-[#c6923f] hover:text-white transition">
            <i class="fa-brands fa-tiktok"></i>
        </a>

        <a href="#" class="w-10 h-10 rounded-full border border-[#e7d8c8] flex items-center justify-center hover:bg-[#c6923f] hover:text-white transition">
            <i class="fa-brands fa-whatsapp"></i>
        </a>

    </div>

</div>
        </div>

    </div>

    <!-- Copyright -->
    <div class="border-t border-[#eee6dc]">

        <div class="max-w-7xl mx-auto px-6 py-5 text-center text-sm text-gray-500">

            © {{ date('Y') }} Luxéa Jewelry. Tous droits réservés.

        </div>

    </div>

</footer>
