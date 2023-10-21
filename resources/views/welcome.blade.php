<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CE SENEGAL</title>
    
    <!-- Inclure le lien CSS pour Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Styles CSS personnalisés -->
    <style>
        /* Style pour le navbar vert */
        .navbar {
            background-color: green;
        }

        /* Style pour les boutons de connexion */
        .login-button, .register-button {
            margin-left: 10px;
        }

        /* Style pour le corps de la page */
        body {
            background-color: white; /* Arrière-plan vert clair */
            color: white;
        }

        /* Styles personnalisés pour les sections de la page */
        .section {
            padding: 20px;
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.5); /* Arrière-plan semi-transparent */
        }

        /* Style pour le pied de page */
        .footer {
            background-color: #00796b;
            padding: 20px;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            C-E SENEGAL <img src="{{ asset('admin_assets/img/sen5.jpg') }}" alt="Logo" width="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            
        </div>
        <div class="auth-links">
            <a href="{{ route('login') }}" class="login-button btn btn-primary">Connexion</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="register-button btn btn-success">Inscription</a>
            @endif
        </div>
    </nav>

    <!-- Section 1 -->
    <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Notre plateforme</h2>
                <p>C-E SENEGAL, votre partenaire de confiance pour le parrainage et les élections présidentielles au Sénégal, révolutionne la manière dont les citoyens sénégalais participent activement à la démocratie. Notre plateforme conviviale simplifie le processus de parrainage, offrant une expérience transparente et sécurisée. Vous, en tant que citoyen, pouvez soutenir le candidat de votre choix, contribuant ainsi à l'enrichissement du débat démocratique. Rejoignez-nous sur www.cesenegal.sn pour faire entendre votre voix et façonner l'avenir du Sénégal, car chaque voix compte, chaque citoyen compte.

                </p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('admin_assets/img/44.jpg') }}" alt="Image 1" width="230" class="img-fluid">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('admin_assets/img/33.jpg') }}" alt="Image 2" width="210" class="img-fluid">
            </div>
            
        </div>
    </div>
</div>

    <!-- Section 2 -->
    <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>processus</h2>
                <p>C-E SENEGAL, votre partenaire pour les élections présidentielles au Sénégal, simplifie le processus de parrainage. Inscrivez-vous au parrainage, choisissez le candidat que vous souhaitez soutenir, signez électroniquement en sa faveur. Votre contribution est transparente et sécurisée. Une fois le parrainage terminé, vous avez le pouvoir de voter pour le candidat de votre choix lors des élections présidentielles. Rejoignez-nous sur www.cesenegal.sn pour façonner l'avenir du Sénégal. Chaque voix compte, chaque citoyen compte.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('admin_assets/img/22.jpg') }}" alt="Image 1" width="230" class="img-fluid">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('admin_assets/img/11.jpg') }}" alt="Image 2" width="220" class="img-fluid">
            </div>
        </div>
    </div>
</div>

    <!-- Pied de page stylé -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Contactez-nous</h3>
                    <p>Adresse : THIES, SOFRACO</p>
                    <p>Email : www.cesenegal.sn</p>
                </div>
                <div class="col-md-6">
                    <h3>Suivez-nous</h3>
                    <a href="#" class="btn btn-info">Facebook</a>
                    <a href="#" class="btn btn-info">Twitter</a>
                    <a href="#" class="btn btn-info">Instagram</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclure les scripts JavaScript de Bootstrap si nécessaire -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
