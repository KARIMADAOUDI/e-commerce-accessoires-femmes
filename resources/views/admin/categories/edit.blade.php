@extends('admin.layouts.app')

@section('title', 'Modifier Catégorie')

@section('content')

<div class="bg-white rounded-2xl shadow p-8">

    <h2 class="text-2xl font-bold mb-6">
        Modifier la catégorie
    </h2>

    <form action="{{ route('admin.categories.update', $category) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-5">

            <label class="block font-semibold mb-2">
                Nom
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name', $category->name) }}"
                class="w-full border rounded-lg p-3"
                required>

        </div>

        <div class="mb-5">

            <label class="block font-semibold mb-2">
                Description
            </label>

            <textarea
                name="description"
                rows="4"
                class="w-full border rounded-lg p-3">{{ old('description', $category->description) }}</textarea>

        </div>

        <div class="mb-6">

            <label class="flex items-center gap-2">

                <input
                    type="checkbox"
                    name="status"
                    value="1"
                    {{ $category->status ? 'checked' : '' }}>

                <span>Catégorie active</span>

            </label>

        </div>

        <div class="flex gap-3">

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg">

                Mettre à jour

            </button>

            <a href="{{ route('admin.categories.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">

                Retour

            </a>

        </div>

    </form>

</div>

@endsection