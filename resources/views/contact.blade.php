@extends('layouts.app')

@section('nom', 'contact')

@section('contents')
<style>
  /* Styles CSS personnalisés */
  .contact-container {
    background-color: #f0f0f0;
    padding: 20px;
  }

  .contact-image {
    max-width: 100%;
    height: auto;
  }

  .contact-info {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
</style>

<div class="container contact-container">
    <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('admin_assets/img/77.jpg') }}" alt="Image de contact" class="img-fluid contact-image">
        </div>
        <div class="col-md-6">
            <div class="contact-info">
                <h2 class="mb-4">Nous Contacter</h2>
                <p>
                    Pour toute question, préoccupation ou demande d'information, n'hésitez pas à nous contacter. Notre équipe est à votre disposition pour vous aider.
                </p>
                <address>
                    <p><strong>Adresse :</strong> Sofraco , thies</p>
                    <p><strong>Téléphone :</strong> +22177111111111</p>
                    <p><strong>Email :</strong> www.cesenegal.sn/p>
                </address>
            </div>
        </div>
    </div>
</div>
@endsection
