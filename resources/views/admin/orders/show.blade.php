@extends('admin.layouts.app')

@section('title', 'Détail Commande')

@section('content')

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">
        {{ session('success') }}
    </div>
@endif

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    <!-- Informations Client -->
    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-xl font-bold mb-4">
            Informations Client
        </h2>

        <div class="space-y-3">

            <p>
                <strong>Nom :</strong>
                {{ $order->customer_name }}
            </p>

            <p>
                <strong>Téléphone :</strong>
                {{ $order->customer_phone }}
            </p>

            <p>
                <strong>Ville :</strong>
                {{ $order->customer_city }}
            </p>

            <p>
                <strong>Adresse :</strong>
                {{ $order->customer_address }}
            </p>

            <p>
                <strong>Note :</strong>
                {{ $order->note ?? '-' }}
            </p>

        </div>

    </div>

    <!-- Statut -->
    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-xl font-bold mb-4">
            Gestion de la commande
        </h2>

        <form action="{{ route('admin.orders.status', $order) }}"
              method="POST">

            @csrf
            @method('PUT')

            <label class="block mb-2 font-semibold">
                Statut
            </label>

            <select name="status"
                    class="w-full border rounded-lg p-3">

                <option value="Nouvelle"
                    {{ $order->status == 'Nouvelle' ? 'selected' : '' }}>
                    Nouvelle
                </option>

                <option value="Confirmée"
                    {{ $order->status == 'Confirmée' ? 'selected' : '' }}>
                    Confirmée
                </option>

                <option value="Expédiée"
                    {{ $order->status == 'Expédiée' ? 'selected' : '' }}>
                    Expédiée
                </option>

                <option value="Livrée"
                    {{ $order->status == 'Livrée' ? 'selected' : '' }}>
                    Livrée
                </option>

                <option value="Annulée"
                    {{ $order->status == 'Annulée' ? 'selected' : '' }}>
                    Annulée
                </option>

            </select>

            <button
                type="submit"
                class="mt-4 bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg">

                Mettre à jour

            </button>

        </form>

    </div>

</div>

<!-- Produits commandés -->

<div class="bg-white rounded-2xl shadow p-6 mt-6">

    <h2 class="text-xl font-bold mb-4">
        Produits commandés
    </h2>

    <table class="w-full">

        <thead class="bg-gray-100">

        <tr>
            <th class="p-3 text-left">Produit</th>
            <th class="p-3 text-left">Prix</th>
            <th class="p-3 text-left">Quantité</th>
            <th class="p-3 text-left">Sous-total</th>
        </tr>

        </thead>

        <tbody>

        @foreach($order->items as $item)

            <tr class="border-t">

                <td class="p-3">
                    {{ $item->product_name }}
                </td>

                <td class="p-3">
                    {{ $item->price }} DH
                </td>

                <td class="p-3">
                    {{ $item->quantity }}
                </td>

                <td class="p-3">
                    {{ $item->subtotal }} DH
                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

    <div class="mt-6 text-right">

        <h3 class="text-2xl font-bold text-yellow-600">

            Total : {{ $order->total }} DH

        </h3>

    </div>

</div>

@endsection