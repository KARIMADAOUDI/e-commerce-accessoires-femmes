@extends('admin.layouts.app')

@section('title', 'Promotions')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h2 class="text-2xl font-bold">
        Liste des promotions
    </h2>

    <a href="{{ route('admin.promotions.create') }}"
       class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-3 rounded-lg">

        + Ajouter Promotion

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
            <th class="p-4">Nom</th>
            <th class="p-4">Type</th>
            <th class="p-4">Valeur</th>
            <th class="p-4">Début</th>
            <th class="p-4">Fin</th>
            <th class="p-4">Statut</th>
            <th class="p-4">Actions</th>
        </tr>
        </thead>

        <tbody>

        @forelse($promotions as $promotion)

            <tr class="border-t">

                <td class="p-4">{{ $promotion->name }}</td>

                <td class="p-4">
                    {{ $promotion->discount_type }}
                </td>

                <td class="p-4">
                    {{ $promotion->discount_value }}
                </td>

                <td class="p-4">
                    {{ $promotion->start_date }}
                </td>

                <td class="p-4">
                    {{ $promotion->end_date }}
                </td>

                <td class="p-4">

                    @if($promotion->is_active)
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                            Active
                        </span>
                    @else
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
                            Inactive
                        </span>
                    @endif

                </td>

                <td class="p-4">

                    <a href="{{ route('admin.promotions.edit',$promotion) }}"
                       class="bg-blue-500 text-white px-3 py-2 rounded">

                        Modifier

                    </a>

                    <form action="{{ route('admin.promotions.destroy',$promotion) }}"
                          method="POST"
                          class="inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Supprimer cette promotion ?')"
                            class="bg-red-500 text-white px-3 py-2 rounded">

                            Supprimer

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="7"
                    class="text-center p-8 text-gray-500">

                    Aucune promotion trouvée

                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection