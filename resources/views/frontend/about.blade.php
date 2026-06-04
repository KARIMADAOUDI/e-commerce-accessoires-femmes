@extends('layouts.app')

@section('title', 'À propos')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338"
                     class="img-fluid rounded-4 shadow">
            </div>

            <div class="col-lg-6">
                <h1 class="section-title">À propos de nous</h1>
                <p>
                    Élégance Acier est une boutique spécialisée dans les accessoires féminins
                    en acier inoxydable.
                </p>
                <p>
                    Notre objectif est de proposer des bijoux élégants, modernes, résistants
                    et accessibles à toutes les femmes.
                </p>
                <a href="{{ route('shop') }}" class="btn btn-main">Découvrir nos produits</a>
            </div>
        </div>
    </div>
</section>

@endsection
