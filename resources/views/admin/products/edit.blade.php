@extends('admin.layouts.app')

@section('title', 'Modifier Produit')

@section('content')

<div class="bg-white rounded-2xl shadow p-8">

    <h2 class="text-2xl font-bold mb-6">Modifier le produit</h2>

    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="block font-semibold mb-2">Nom du produit</label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}" class="w-full border rounded-lg p-3" required>
            </div>

            <div>
                <label class="block font-semibold mb-2">Catégorie</label>
                <select name="category_id" class="w-full border rounded-lg p-3" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-semibold mb-2">Prix</label>
                <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" class="w-full border rounded-lg p-3" required>
            </div>

            <div>
                <label class="block font-semibold mb-2">Ancien prix</label>
                <input type="number" step="0.01" name="old_price" value="{{ old('old_price', $product->old_price) }}" class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="block font-semibold mb-2">Stock</label>
                <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="block font-semibold mb-2">Nouvelle image</label>
                <input type="file" name="main_image" class="w-full border rounded-lg p-3">

                @if($product->main_image)
                    <img src="{{ asset('storage/'.$product->main_image) }}" class="w-24 h-24 object-cover rounded mt-3">
                @endif
            </div>

        </div>

        <div class="mt-6">
            <label class="block font-semibold mb-2">Description courte</label>
            <textarea name="short_description" rows="3" class="w-full border rounded-lg p-3">{{ old('short_description', $product->short_description) }}</textarea>
        </div>

        <div class="mt-6">
            <label class="block font-semibold mb-2">Description complète</label>
            <textarea name="description" rows="6" class="w-full border rounded-lg p-3">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">

            <label class="flex items-center gap-2">
                <input type="checkbox" name="is_featured" value="1" {{ $product->is_featured ? 'checked' : '' }}>
                Produit vedette
            </label>

            <label class="flex items-center gap-2">
                <input type="checkbox" name="is_new" value="1" {{ $product->is_new ? 'checked' : '' }}>
                Nouveau produit
            </label>

            <label class="flex items-center gap-2">
                <input type="checkbox" name="status" value="1" {{ $product->status ? 'checked' : '' }}>
                Produit actif
            </label>

        </div>

        <div class="mt-8 flex gap-3">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg">
                Mettre à jour
            </button>

            <a href="{{ route('admin.products.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">
                Retour
            </a>
        </div>

    </form>

</div>

@endsection