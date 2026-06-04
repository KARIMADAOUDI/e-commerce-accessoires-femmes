@extends('layouts.app')

@section('title', 'Panier')

@section('content')

<section class="py-5">
    <div class="container">
        <h1 class="section-title text-center">Mon panier</h1>

        <div class="table-responsive">
            <table class="table align-middle bg-white shadow-sm rounded">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($cartItems as $item)
                        <tr>
                            <td>
                                <img src="{{ $item['image'] }}" width="70" class="rounded me-2">
                                {{ $item['name'] }}
                            </td>
                            <td>{{ $item['price'] }} DH</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>{{ $item['price'] * $item['quantity'] }} DH</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-end mt-4">
            <h3>Total : <span class="brand-color">{{ $total }} DH</span></h3>

            @php
                $message = urlencode("Bonjour, je veux confirmer ma commande. Total : " . $total . " DH");
            @endphp

            <a href="https://wa.me/212600000000?text={{ $message }}" target="_blank" class="btn btn-success rounded-pill px-4">
                <i class="bi bi-whatsapp"></i> Commander sur WhatsApp
            </a>
        </div>
    </div>
</section>

@endsection
