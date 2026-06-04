<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold brand-color" href="{{ route('home') }}">
            Élégance Acier
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}">Boutique</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('categories') }}">Catégories</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item">
                    <a class="btn btn-main ms-lg-3" href="{{ route('cart') }}">
                        <i class="bi bi-bag"></i> Panier
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
