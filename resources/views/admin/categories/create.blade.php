@extends('admin.layouts.app')

@section('title', 'Ajouter Catégorie')

@section('content')

<div class="bg-white rounded-2xl shadow p-8">

    <h2 class="text-2xl font-bold mb-6">
        Ajouter une catégorie
    </h2>

    <form action="{{ route('admin.categories.store') }}" method="POST">

        @csrf

        <div class="mb-5">
            <label class="block font-semibold mb-2">
                Nom
            </label>

            <input
                type="text"
                name="name"
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
                class="w-full border rounded-lg p-3"></textarea>
        </div>

        <div class="mb-6">

            <label class="flex items-center gap-2">

                <input
                    type="checkbox"
                    name="status"
                    value="1"
                    checked>

                <span>Catégorie active</span>

            </label>

        </div>

        <div class="flex gap-3">

            <button
                type="submit"
                class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg">

                Enregistrer

            </button>

            <a href="{{ route('admin.categories.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">

                Retour

            </a>

        </div>

    </form>

</div>

@endsection