@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section class="py-5">
    <div class="container">
        <h1 class="section-title text-center">Contactez-nous</h1>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <form class="bg-white p-4 rounded-4 shadow-sm">
                    <div class="mb-3">
                        <label>Nom complet</label>
                        <input type="text" class="form-control" placeholder="Votre nom">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Votre email">
                    </div>

                    <div class="mb-3">
                        <label>Message</label>
                        <textarea class="form-control" rows="5" placeholder="Votre message"></textarea>
                    </div>

                    <button type="button" class="btn btn-main">Envoyer</button>
                </form>
            </div>

            <div class="col-lg-6">
                <div class="bg-light p-4 rounded-4 h-100">
                    <h4>Informations</h4>
                    <p><i class="bi bi-whatsapp brand-color"></i> 06 00 00 00 00</p>
                    <p><i class="bi bi-envelope brand-color"></i> contact@eleganceacier.ma</p>
                    <p><i class="bi bi-geo-alt brand-color"></i> Fès, Maroc</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
