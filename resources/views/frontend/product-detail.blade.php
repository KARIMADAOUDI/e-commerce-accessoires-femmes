@extends('layouts.app')

@section('title', $product['name'])

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <img src="{{ $product['image'] }}" class="img-fluid rounded-4 shadow mb-3">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ $product['image'] }}" class="img-fluid rounded-3">
                    </div>
                    <div class="col-4">
                        <img src="{{ $product['image'] }}" class="img-fluid rounded-3">
                    </div>
                    <div class="col-4">
                        <img src="{{ $product['image'] }}" class="img-fluid rounded-3">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h1>{{ $product['name'] }}</h1>
                <h3 class="brand-color fw-bold my-3">{{ $product['price'] }} DH</h3>

                <p>{{ $product['description'] }}</p>

                <h5 class="mt-4">Caractéristiques</h5>
                <ul>
                    <li>Acier inoxydable</li>
                    <li>Résistant à l’eau</li>
                    <li>Design élégant</li>
                    <li>Convient aux cadeaux</li>
                </ul>

                @php
                    $message = urlencode("Bonjour, je veux commander ce produit : " . $product['name'] . " - Prix : " . $product['price'] . " DH");
                @endphp

                <a href="https://wa.me/212600000000?text={{ $message }}" target="_blank" class="btn btn-success rounded-pill px-4">
                    <i class="bi bi-whatsapp"></i> Commander via WhatsApp
                </a>
            </div>
        </div>

        <hr class="my-5">

        <h2 class="section-title text-center">Produits similaires</h2>

        <div class="row">
            @foreach($similarProducts as $similar)
                <div class="col-md-4 mb-4">
                    <div class="card card-product h-100">
                        <img src="{{ $similar['image'] }}" class="card-img-top" style="height:230px; object-fit:cover;">
                        <div class="card-body text-center">
                            <h5>{{ $similar['name'] }}</h5>
                            <p class="fw-bold brand-color">{{ $similar['price'] }} DH</p>
                            <a href="{{ route('product.show', $similar['slug']) }}" class="btn btn-main">Voir</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
