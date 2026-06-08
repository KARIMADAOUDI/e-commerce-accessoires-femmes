@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

    <div class="bg-white rounded-2xl shadow p-6 border-l-4 border-yellow-500">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-500">Produits</p>
                <h3 class="text-3xl font-bold">{{ $productsCount }}</h3>
            </div>
            <i class="fas fa-gem text-4xl text-yellow-500"></i>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 border-l-4 border-blue-500">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-500">Catégories</p>
                <h3 class="text-3xl font-bold">{{ $categoriesCount }}</h3>
            </div>
            <i class="fas fa-layer-group text-4xl text-blue-500"></i>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 border-l-4 border-green-500">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-500">Commandes</p>
                <h3 class="text-3xl font-bold">{{ $ordersCount }}</h3>
            </div>
            <i class="fas fa-shopping-bag text-4xl text-green-500"></i>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 border-l-4 border-red-500">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-500">Messages</p>
                <h3 class="text-3xl font-bold">{{ $contactsCount }}</h3>
            </div>
            <i class="fas fa-envelope text-4xl text-red-500"></i>
        </div>
    </div>

</div>

<div class="mt-10">

    <div class="bg-white rounded-2xl shadow p-8">

        <h2 class="text-2xl font-bold mb-4">
            Bienvenue dans Jewelry Zineb
        </h2>

        <p class="text-gray-600">
            Gérez vos catégories, produits, commandes,
            promotions et paramètres depuis cette interface.
        </p>

    </div>

</div>

@endsection