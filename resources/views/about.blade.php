@extends('layouts.app')

@section('nom', 'about')

@section('contents')
<style>
  /* Styles CSS personnalisés */
  .about-container {
    background-color: #f4f4f4;
    padding: 20px;
  }

  .about-heading {
    font-size: 32px;
    margin-bottom: 20px;
    color: #333;
  }

  .about-text {
    font-size: 18px;
    line-height: 1.6;
  }
</style>

<div class="container about-container">
    <div class="row">
        <div class="col-md-6">
        <img src="{{ asset('admin_assets/img/123.jpg') }}" alt="Image de votre site" class="img-fluid">
        </div>
        <div class="col-md-6">
            <div class="about-info">
                <h2 class="about-heading">Bienvenue sur Notre Site</h2>
                <p class="about-text">
                C-E SENEGAL, votre partenaire de confiance pour le parrainage et les élections présidentielles au Sénégal, révolutionne la manière dont les citoyens sénégalais participent activement à la démocratie. Notre plateforme conviviale simplifie le processus de parrainage, offrant une expérience transparente et sécurisée. Vous, en tant que citoyen, pouvez soutenir le candidat de votre choix, contribuant ainsi à l'enrichissement du débat démocratique. Rejoignez-nous sur www.cesenegal.sn pour faire entendre votre voix et façonner l'avenir du Sénégal, car chaque voix compte, chaque citoyen compte.
                </p>
                
            </div>
        </div>
    </div>
</div>
@endsection
