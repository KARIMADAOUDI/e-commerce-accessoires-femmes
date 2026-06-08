@extends('admin.layouts.app')

@section('title', 'Catégories')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h2 class="text-2xl font-bold">
        Liste des catégories
    </h2>

    <a href="{{ route('admin.categories.create') }}"
       class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-3 rounded-lg">

        + Ajouter
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
            <th class="p-4 text-left">ID</th>
            <th class="p-4 text-left">Nom</th>
            <th class="p-4 text-left">Slug</th>
            <th class="p-4 text-left">Statut</th>
            <th class="p-4 text-center">Actions</th>
        </tr>

        </thead>

        <tbody>

        @forelse($categories as $category)

            <tr class="border-t">

                <td class="p-4">{{ $category->id }}</td>

                <td class="p-4 font-medium">
                    {{ $category->name }}
                </td>

                <td class="p-4">
                    {{ $category->slug }}
                </td>

                <td class="p-4">

                    @if($category->status)
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                            Actif
                        </span>
                    @else
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                            Inactif
                        </span>
                    @endif

                </td>

                <td class="p-4 text-center">

                    <a href="{{ route('admin.categories.edit',$category) }}"
                       class="bg-blue-500 text-white px-3 py-2 rounded">

                        Modifier
                    </a>

                    <form action="{{ route('admin.categories.destroy',$category) }}"
                          method="POST"
                          class="inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Supprimer cette catégorie ?')"
                            class="bg-red-500 text-white px-3 py-2 rounded">

                            Supprimer

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="5" class="p-6 text-center text-gray-500">
                    Aucune catégorie trouvée
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection