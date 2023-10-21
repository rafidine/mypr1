@extends('layouts.app')

@section('nom', 'activite')

@section('contents')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page Jolie</title>
    <!-- Ajoutez ici les liens vers les fichiers CSS de Bootstrap -->
    <!-- Vous pouvez les télécharger depuis le site officiel de Bootstrap -->
    <link rel="stylesheet" href="chemin-vers-bootstrap.min.css">
    <!-- Ajoutez ici un lien vers votre fichier CSS personnalisé (si nécessaire) -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- En-tête de la page -->
    <header class="jumbotron text-center">
        <h1>Parrainage et Presidentielle</h1>
        <p>Le parrainage dans le contexte des élections présidentielles est un processus par lequel les candidats à la présidence doivent recueillir un certain nombre de signatures de soutien (parrainages) de citoyens ou d'élus pour pouvoir se présenter à l'élection. Les exigences de parrainage varient d'un pays à l'autre et sont établies par les lois électorales nationales. Le processus de parrainage vise à garantir que seuls les candidats ayant un certain niveau de soutien et de crédibilité peuvent participer à l'élection présidentielle.</p>
    </header>

    <!-- Section de contenu -->
    <section class="container">
        <div class="row">
            <div class="col-md-6">
              <img src="{{ asset('admin_assets/img/9999.jpg') }}" alt="Image 1" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Le SENEGAL</h2>
                <p>
                C-E SENEGAL, votre partenaire pour les élections présidentielles au Sénégal, simplifie le processus de parrainage. Inscrivez-vous au parrainage, choisissez le candidat que vous souhaitez soutenir, signez électroniquement en sa faveur. Votre contribution est transparente et sécurisée. Une fois le parrainage terminé, vous avez le pouvoir de voter pour le candidat de votre choix lors des élections présidentielles. Rejoignez-nous sur www.cesenegal.sn pour façonner l'avenir du Sénégal. Chaque voix compte, chaque citoyen compte.
                    
                </p>
            </div>
        </div>
    </section>

    <!-- Autres sections et contenu à ajouter selon vos besoins -->

    <!-- Ajoutez ici les liens vers les fichiers JavaScript de Bootstrap (si nécessaire) -->

</body>
</html>


@endsection
