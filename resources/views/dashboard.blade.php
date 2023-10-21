@extends('layouts.app')

@section('nom', 'Site - CE-SENEGAL')

@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartes de Profil</title>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <style>
    .swiper-container {
      width: 100%;
      height: 200px; /* Hauteur du slider, ajustez selon vos besoins */
      background-color: #28a745; /* Couleur de fond du slider */
    }

    .swiper-slide {
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 24px;
      color: #fff; /* Couleur du texte du slider */
    }

    .profile-container {
      display: flex; /* Afficher les cartes horizontalement */
      justify-content: space-around; /* Espacement égal entre les cartes */
      align-items: flex-start; /* Aligner les cartes en haut */
      flex-wrap: wrap; /* Permettre le retour à la ligne des cartes si nécessaire */
      padding: 20px; /* Espacement autour des cartes */
    }

    .profile-card {
      width: 300px;
      border: 1px solid #ccc;
      margin: 10px;
      padding: 10px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      text-align: center;
      background-color: #fff; /* Fond blanc pour les cartes */
    }

    .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.8);
      margin: 0 auto;
      overflow: hidden;
    }

    .profile-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-name {
      font-size: 18px;
      margin-top: 10px;
    }

    .profile-description {
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <h1>Bienvenue à vous</h1>
      </div>
      <div class="swiper-slide">
        <h1>Dalal ak Diam</h1>
      </div>
      <!-- Ajoutez plus de diapositives au besoin -->
    </div>
    <!-- Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Navigation -->
    
  </div>

  <div class="profile-container">
    <!-- Ajoutez ici vos cartes de profil -->
    <div class="profile-card">
      <div class="profile-image">
        <img src="{{ asset('admin_assets/img/1.jpg') }}" alt="Nom du profil 1" class="profile-image">
      </div>
      <div class="profile-name">OUSMANE SONKO</div>
      <div class="profile-description">
        <p>Pastef</p>
      </div>
    </div>

    <div class="profile-card">
      <div class="profile-image">
        <img src="{{ asset('admin_assets/img/3.png') }}" alt="Nom du profil 2" class="profile-image">
      </div>
      <div class="profile-name">khalifa sall</div>
      <div class="profile-description">
        <p>defar senegal</p>
      </div>
    </div>

    <div class="profile-card">
      <div class="profile-image">
        <img src="{{ asset('admin_assets/img/3.jpg') }}" alt="Nom du profil 3" class="profile-image">
      </div>
      <div class="profile-name">bougane gueye</div>
      <div class="profile-description">
        <p>gueum sa bop</p>
      </div>
    </div> 
    <div class="profile-card">
      <div class="profile-image">
        <img src="{{ asset('admin_assets/img/karim.jpg') }}" alt="Nom du profil 3" class="profile-image">
      </div>
      <div class="profile-name">karim wade</div>
      <div class="profile-description">
        <p>PDS</p>
      </div>
    </div>
    <!-- Ajoutez d'autres cartes de profil ici -->
  </div>

  <!-- Script Swiper -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      autoplay: {
        delay: 2000, // Définissez la durée de chaque diapositive en millisecondes (5 secondes dans cet exemple)
      },
      loop: true, // Répétez le slider en boucle
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
</html>
@endsection
