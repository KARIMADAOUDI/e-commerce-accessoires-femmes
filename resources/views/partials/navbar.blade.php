<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-[#eee6dc] shadow-sm">

    <div class="max-w-7xl mx-auto px-6">

        <div class="h-24 flex items-center justify-between">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="text-center">
                <h1 class="text-4xl font-serif leading-none tracking-wider">
                    LUXÉA
                </h1>

                <p class="text-[10px] tracking-[0.4em] text-[#c6923f] uppercase">
                    Jewelry
                </p>
            </a>

            <!-- Menu Desktop -->
            <nav class="hidden lg:flex items-center gap-10 text-sm font-semibold uppercase">

                <a href="{{ url('/') }}"
                   class="{{ request()->is('/') ? 'text-[#c6923f] border-b-2 border-[#c6923f] pb-2' : 'hover:text-[#c6923f]' }}">
                    Accueil
                </a>

                <a href="{{ url('/boutique') }}"
                   class="{{ request()->is('boutique') ? 'text-[#c6923f] border-b-2 border-[#c6923f] pb-2' : 'hover:text-[#c6923f]' }}">
                    Boutique
                </a>

                <a href="{{ url('/nouveautes') }}"
                   class="{{ request()->is('nouveautes') ? 'text-[#c6923f] border-b-2 border-[#c6923f] pb-2' : 'hover:text-[#c6923f]' }}">
                    Nouveautés
                </a>

                <a href="{{ url('/collections') }}"
                   class="{{ request()->is('collections') ? 'text-[#c6923f] border-b-2 border-[#c6923f] pb-2' : 'hover:text-[#c6923f]' }}">
                    Collections
                </a>

                <a href="{{ url('/a-propos') }}"
                   class="{{ request()->is('a-propos') ? 'text-[#c6923f] border-b-2 border-[#c6923f] pb-2' : 'hover:text-[#c6923f]' }}">
                    À propos
                </a>

                <a href="{{ url('/contact') }}"
                   class="{{ request()->is('contact') ? 'text-[#c6923f] border-b-2 border-[#c6923f] pb-2' : 'hover:text-[#c6923f]' }}">
                    Contact
                </a>

            </nav>

            <!-- Actions -->
            <div class="flex items-center gap-5 text-xl">

                <!-- Recherche -->
                <button class="hover:text-[#c6923f] transition">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

                <!-- Wishlist -->
                <a href="{{ url('/wishlist') }}"
                   class="hover:text-[#c6923f] transition">
                    <i class="fa-regular fa-heart"></i>
                </a>

                <!-- Compte -->
                @auth
                    <a href="{{ route('profile.edit') }}"
                       class="hover:text-[#c6923f] transition">
                        <i class="fa-regular fa-user"></i>
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="hover:text-[#c6923f] transition">
                        <i class="fa-regular fa-user"></i>
                    </a>
                @endauth

                <!-- Panier -->
                <a href="{{ url('/panier') }}"
                   class="relative hover:text-[#c6923f] transition">

                    <i class="fa-solid fa-bag-shopping"></i>

                    <span class="absolute -top-2 -right-2 w-5 h-5 rounded-full bg-[#c6923f] text-white text-[10px] flex items-center justify-center">
                        0
                    </span>

                </a>

            </div>

        </div>

    </div>

</header>
