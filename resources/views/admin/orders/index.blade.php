@extends('admin.layouts.app')

@section('title', 'Commandes')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h2 class="text-2xl font-bold">
        Liste des commandes
    </h2>

</div>

<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

        <tr>
            <th class="p-4">ID</th>
            <th class="p-4">Client</th>
            <th class="p-4">Téléphone</th>
            <th class="p-4">Total</th>
            <th class="p-4">Statut</th>
            <th class="p-4">Actions</th>
        </tr>

        </thead>

        <tbody>

        @forelse($orders as $order)

            <tr class="border-t">

                <td class="p-4">
                    #{{ $order->id }}
                </td>

                <td class="p-4">
                    {{ $order->customer_name }}
                </td>

                <td class="p-4">
                    {{ $order->customer_phone }}
                </td>

                <td class="p-4">
                    {{ $order->total }} DH
                </td>

                <td class="p-4">

                    <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700">

                        {{ $order->status }}

                    </span>

                </td>

                <td class="p-4">

                    <a href="{{ route('admin.orders.show',$order) }}"
                       class="bg-yellow-500 text-white px-4 py-2 rounded">

                        Voir

                    </a>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="6"
                    class="text-center p-8 text-gray-500">

                    Aucune commande trouvée

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection