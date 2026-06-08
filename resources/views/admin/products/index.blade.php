@extends('admin.layouts.app')

@section('title', 'Produits')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h2 class="text-2xl font-bold">
        Liste des produits
    </h2>

    <a href="{{ route('admin.products.create') }}"
       class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-3 rounded-lg">

        + Ajouter Produit

    </a>

</div>

@if(session('success'))

    <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
        {{ session('success') }}
    </div>

@endif

<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

        <tr>

            <th class="p-4">Image</th>
            <th class="p-4">Produit</th>
            <th class="p-4">Catégorie</th>
            <th class="p-4">Prix</th>
            <th class="p-4">Stock</th>
            <th class="p-4">Statut</th>
            <th class="p-4">Actions</th>

        </tr>

        </thead>

        <tbody>

        @forelse($products as $product)

            <tr class="border-t">

                <td class="p-4">

                    @if($product->main_image)

                        <img
                            src="{{ asset('storage/'.$product->main_image) }}"
                            class="w-16 h-16 rounded object-cover">

                    @endif

                </td>

                <td class="p-4">
                    {{ $product->name }}
                </td>

                <td class="p-4">
                    {{ $product->category->name ?? '-' }}
                </td>

                <td class="p-4">
                    {{ $product->price }} DH
                </td>

                <td class="p-4">
                    {{ $product->stock }}
                </td>

                <td class="p-4">

                    @if($product->status)

                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                            Actif
                        </span>

                    @else

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
                            Inactif
                        </span>

                    @endif

                </td>

                <td class="p-4">

                    <a href="{{ route('admin.products.edit',$product) }}"
                       class="bg-blue-500 text-white px-3 py-2 rounded">

                        Modifier

                    </a>

                    <form action="{{ route('admin.products.destroy',$product) }}"
                          method="POST"
                          class="inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Supprimer ce produit ?')"
                            class="bg-red-500 text-white px-3 py-2 rounded">

                            Supprimer

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="7"
                    class="p-8 text-center text-gray-500">

                    Aucun produit trouvé

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection