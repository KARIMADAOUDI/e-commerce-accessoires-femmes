@extends('layouts.app')

@section('title', 'Boutique')

@section('content')

<section class="py-5">
    <div class="container">
        <h1 class="section-title text-center">Boutique</h1>

        <div class="row mb-4">
            <div class="col-md-4 mb-2">
                <input type="text" class="form-control rounded-pill" placeholder="Rechercher un produit...">
            </div>

            <div class="col-md-4 mb-2">
                <select class="form-select rounded-pill">
                    <option>Filtrer par catégorie</option>
                    <option>Bagues</option>
                    <option>Bracelets</option>
                    <option>Colliers</option>
                    <option>Montres</option>
                </select>
            </div>

            <div class="col-md-4 mb-2">
                <select class="form-select rounded-pill">
                    <option>Trier par</option>
                    <option>Prix croissant</option>
                    <option>Prix décroissant</option>
                    <option>Nouveautés</option>
                </select>
            </div>
        </div>

        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card card-product h-100">
                        <img src="{{ $product['image'] }}" class="card-img-top" style="height:260px; object-fit:cover;">
                        <div class="card-body text-center">
                            <span class="badge bg-light text-dark mb-2">{{ $product['category'] }}</span>
                            <h5>{{ $product['name'] }}</h5>
                            <p class="fw-bold brand-color">{{ $product['price'] }} DH</p>
                            <a href="{{ route('product.show', $product['slug']) }}" class="btn btn-main">Voir produit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <nav class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
            </ul>
        </nav>
    </div>
</section>

@endsection
