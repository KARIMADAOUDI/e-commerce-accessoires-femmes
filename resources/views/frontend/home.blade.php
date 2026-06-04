@extends('layouts.app')

@section('title', 'Accueil - Élégance Acier')

@section('content')

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold">
                    Accessoires en acier inoxydable pour femmes élégantes
                </h1>
                <p class="lead mt-3">
                    Découvrez nos bagues, bracelets, colliers, montres et parures modernes.
                </p>
                <a href="{{ route('shop') }}" class="btn btn-main mt-3">Voir la boutique</a>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338"
                     class="img-fluid rounded-4 shadow"
                     alt="Bijoux femme">
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Produits vedettes</h2>

        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card card-product h-100">
                        <img src="{{ $product['image'] }}" class="card-img-top" style="height:260px; object-fit:cover;">
                        <div class="card-body text-center">
                            <h5>{{ $product['name'] }}</h5>
                            <p class="fw-bold brand-color">{{ $product['price'] }} DH</p>
                            <a href="{{ route('product.show', $product['slug']) }}" class="btn btn-main">Voir détail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <h2 class="section-title text-center">Catégories populaires</h2>

        <div class="row text-center">
            @foreach($categories as $category)
                <div class="col-6 col-md-4 col-lg-2 mb-3">
                    <div class="p-3 bg-light rounded-4 shadow-sm">
                        <strong>{{ $category }}</strong>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Avis clients</h2>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="p-4 bg-white rounded-4 shadow-sm">
                    <p>“Très belle qualité, livraison rapide.”</p>
                    <strong>- Salma</strong>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="p-4 bg-white rounded-4 shadow-sm">
                    <p>“Les bijoux sont élégants et résistants.”</p>
                    <strong>- Imane</strong>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="p-4 bg-white rounded-4 shadow-sm">
                    <p>“Je recommande vraiment cette boutique.”</p>
                    <strong>- Lina</strong>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
