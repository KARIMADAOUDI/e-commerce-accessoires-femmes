@extends('layouts.app')

@section('title', 'Catégories')

@section('content')

<section class="py-5">
    <div class="container">
        <h1 class="section-title text-center">Nos catégories</h1>

        <div class="row">
            @foreach($categories as $category)
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card card-product">
                        <img src="{{ $category['image'] }}" class="card-img-top" style="height:260px; object-fit:cover;">
                        <div class="card-body text-center">
                            <h5>{{ $category['name'] }}</h5>
                            <a href="{{ route('shop') }}" class="btn btn-main">Voir produits</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
