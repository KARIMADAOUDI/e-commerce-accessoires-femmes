@extends('admin.layouts.app')

@section('title', 'Paramètres')

@section('content')

@if(session('success'))

    <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">
        {{ session('success') }}
    </div>

@endif

<div class="bg-white rounded-2xl shadow p-8">

    <h2 class="text-2xl font-bold mb-6">
        Paramètres du site
    </h2>

    <form action="{{ route('admin.settings.update') }}"
      method="POST"
      enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="block mb-2 font-semibold">
                    Nom du site
                </label>

                <input
                    type="text"
                    name="site_name"
                    value="{{ old('site_name',$setting->site_name) }}"
                    class="w-full border rounded-lg p-3">
            </div>
            <div>
                <label class="block mb-2 font-semibold">
                    Logo du site
                </label>

                <input
                    type="file"
                    name="logo"
                    class="w-full border rounded-lg p-3">

                @if($setting->logo)
                    <img src="{{ asset('storage/'.$setting->logo) }}"
                        class="w-24 h-24 mt-3 rounded">
                @endif
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Téléphone WhatsApp
                </label>

                <input
                    type="text"
                    name="phone"
                    value="{{ old('phone',$setting->phone) }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email',$setting->email) }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Facebook
                </label>

                <input
                    type="text"
                    name="facebook"
                    value="{{ old('facebook',$setting->facebook) }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Instagram
                </label>

                <input
                    type="text"
                    name="instagram"
                    value="{{ old('instagram',$setting->instagram) }}"
                    class="w-full border rounded-lg p-3">
            </div>

        </div>

        <div class="mt-6">

            <label class="block mb-2 font-semibold">
                Adresse
            </label>

            <textarea
                name="address"
                rows="4"
                class="w-full border rounded-lg p-3">{{ old('address',$setting->address) }}</textarea>

        </div>

        <button
            type="submit"
            class="mt-6 bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg">

            Enregistrer

        </button>

    </form>

</div>

@endsection