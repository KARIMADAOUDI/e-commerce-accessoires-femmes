<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Zineb Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body class="bg-stone-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-72 bg-black text-white shadow-xl">

        <div class="p-8 border-b border-gray-800">

            <h1 class="text-3xl font-bold text-yellow-500">
                Jewelry Zineb
            </h1>

            <p class="text-gray-400 text-sm mt-2">
                Administration
            </p>

        </div>

        <nav class="mt-6">

            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 px-6 py-4 hover:bg-yellow-500 hover:text-black transition">

                <i class="fas fa-chart-line"></i>
                Dashboard
            </a>

            <a href="{{ route('admin.categories.index') }}"
               class="flex items-center gap-3 px-6 py-4 hover:bg-yellow-500 hover:text-black transition">

                <i class="fas fa-layer-group"></i>
                Catégories
            </a>

            <a href="{{ route('admin.products.index') }}"
                class="flex items-center gap-3 px-6 py-4 hover:bg-yellow-500 hover:text-black transition">

                <i class="fas fa-gem"></i>
                Produits

            </a>

            <a href="{{ route('admin.orders.index') }}"
                class="flex items-center gap-3 px-6 py-4 hover:bg-yellow-500 hover:text-black transition">

                <i class="fas fa-shopping-bag"></i>
                Commandes

            </a>

            <a href="{{ route('admin.promotions.index') }}"
                class="flex items-center gap-3 px-6 py-4 hover:bg-yellow-500 hover:text-black transition">

                <i class="fas fa-tags"></i>
                Promotions

            </a>

            <a href="#"
               class="flex items-center gap-3 px-6 py-4 hover:bg-yellow-500 hover:text-black transition">

                <i class="fas fa-envelope"></i>
                Messages
            </a>

            <a href="{{ route('admin.settings.edit') }}"
                class="flex items-center gap-3 px-6 py-4 hover:bg-yellow-500 hover:text-black transition">

                <i class="fas fa-cog"></i>
                Paramètres

            </a>

        </nav>
        <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button
            type="submit"
            class="w-full flex items-center gap-3 px-6 py-4 text-red-500 hover:bg-red-500 hover:text-white transition">

            <i class="fas fa-sign-out-alt"></i>
            Déconnexion

        </button>
        </form>

    </aside>

    <!-- Main -->
    <main class="flex-1">

        <!-- Header -->
        <header class="bg-white shadow-sm">

            <div class="flex justify-between items-center px-10 py-6">

                <div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        @yield('title', 'Dashboard')
                    </h2>
                </div>

                <div class="flex items-center gap-4">

                    <div
                        class="w-12 h-12 rounded-full bg-yellow-500 text-white flex items-center justify-center font-bold">
                        A
                    </div>

                    <div>
                        <p class="font-semibold">
                            Admin
                        </p>
                    </div>

                </div>

            </div>

        </header>

        <!-- Content -->
        <section class="p-10">

            @yield('content')

        </section>

    </main>

</div>

</body>
</html>