@extends('admin.layouts.app')

@section('title', 'Ajouter Produit')

@section('content')

<div class="bg-white rounded-2xl shadow p-8">

    <h2 class="text-2xl font-bold mb-6">
        Ajouter un produit
    </h2>

    <form action="{{ route('admin.products.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="block font-semibold mb-2">
                    Nom du produit
                </label>

                <input
                    type="text"
                    name="name"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div>
                <label class="block font-semibold mb-2">
                    Catégorie
                </label>

                <select
                    name="category_id"
                    class="w-full border rounded-lg p-3"
                    required>

                    <option value="">
                        Choisir une catégorie
                    </option>

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div>
                <label class="block font-semibold mb-2">
                    Prix
                </label>

                <input
                    type="number"
                    step="0.01"
                    name="price"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div>
                <label class="block font-semibold mb-2">
                    Ancien prix
                </label>

                <input
                    type="number"
                    step="0.01"
                    name="old_price"
                    class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="block font-semibold mb-2">
                    Stock
                </label>

                <input
                    type="number"
                    name="stock"
                    class="w-full border rounded-lg p-3"
                    value="0">
            </div>

            <div>
                <label class="block font-semibold mb-2">
                    Image principale
                </label>

                <input
                    type="file"
                    name="main_image"
                    class="w-full border rounded-lg p-3">
            </div>

        </div>

        <div class="mt-6">
            <label class="block font-semibold mb-2">
                Description courte
            </label>

            <textarea
                name="short_description"
                rows="3"
                class="w-full border rounded-lg p-3"></textarea>
        </div>

        <div class="mt-6">
            <label class="block font-semibold mb-2">
                Description complète
            </label>

            <textarea
                name="description"
                rows="6"
                class="w-full border rounded-lg p-3"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">

            <label class="flex items-center gap-2">

                <input
                    type="checkbox"
                    name="is_featured"
                    value="1">

                Produit vedette

            </label>

            <label class="flex items-center gap-2">

                <input
                    type="checkbox"
                    name="is_new"
                    value="1">

                Nouveau produit

            </label>

            <label class="flex items-center gap-2">

                <input
                    type="checkbox"
                    name="status"
                    value="1"
                    checked>

                Produit actif

            </label>

        </div>

        <div class="mt-8 flex gap-3">

            <button
                type="submit"
                class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg">

                Enregistrer

            </button>

            <a href="{{ route('admin.products.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">

                Retour

            </a>

        </div>

    </form>

</div>

@endsection