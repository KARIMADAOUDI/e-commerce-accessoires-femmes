@extends('admin.layouts.app')

@section('title', 'Ajouter Promotion')

@section('content')

<div class="bg-white rounded-2xl shadow p-8">

    <h2 class="text-2xl font-bold mb-6">
        Ajouter une promotion
    </h2>

    <form action="{{ route('admin.promotions.store') }}" method="POST">

        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="block mb-2 font-semibold">
                    Nom
                </label>

                <input type="text"
                       name="name"
                       class="w-full border rounded-lg p-3"
                       required>
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Type
                </label>

                <select name="discount_type"
                        class="w-full border rounded-lg p-3">

                    <option value="percentage">
                        Pourcentage
                    </option>

                    <option value="fixed">
                        Montant fixe
                    </option>

                </select>
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Valeur
                </label>

                <input type="number"
                       step="0.01"
                       name="discount_value"
                       class="w-full border rounded-lg p-3"
                       required>
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Date début
                </label>

                <input type="date"
                       name="start_date"
                       class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Date fin
                </label>

                <input type="date"
                       name="end_date"
                       class="w-full border rounded-lg p-3">
            </div>

        </div>

        <div class="mt-6">

            <label class="flex items-center gap-2">

                <input type="checkbox"
                       name="is_active"
                       value="1"
                       checked>

                Promotion active

            </label>

        </div>

        <div class="mt-8 flex gap-3">

            <button type="submit"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg">

                Enregistrer

            </button>

            <a href="{{ route('admin.promotions.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">

                Retour

            </a>

        </div>

    </form>

</div>

@endsection