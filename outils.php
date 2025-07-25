
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Outils en ligne gratuits pour développeurs web | Alexis AMAND</title>
  <meta name="description" content="Minifiez votre code, testez des fonctionnalités et optimisez vos pages grâce à nos outils gratuits pour développeurs et créateurs de sites web.">

  <link rel="icon" href="/dist/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/outils.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

  <!--style>
    h2.outil-title {
      font-size: 1.25rem;
      font-family: "Roboto", sans-serif;
      font-weight: 500;
    }

    h2.outil-title:first-letter {
    color: #000000;
    }     
  </style-->

</head>
<body class="bg-light">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <!-- Outils pratiques pour les développeurs -->
  <section id="outils">
      <div class="container text-center">

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Outils</li>
          </ol>
        </nav>

        <h1 class="display-5 my-5">Boîte à outils web</h1>

          <div class="row">
            <div class="col-12 text-center mb-2">
              <p class="lead">Bienvenue dans la boîte à outils web ! Ici, vous trouverez des utilitaires simples et efficaces pour améliorer la qualité, la vitesse et la compatibilité de vos projets web. Tous les outils sont gratuits, en ligne, et sans inscription.</p>
            </div> 
          <div> 

          <div class="row">

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card h-100 d-flex flex-column">
                <img src="/img/minifieur-css.webp" class="card-img-top" alt="image qui montre quelques lignes de CSS" width="960" height="540">
                <div class="card-body">
                  <h2 class="card-title mb-1 outil-title">Minifier votre CSS</h2>
                  <p class="card-text">Collez votre code CSS, minifiez-le d’un clic, et copiez le résultat. Pratique pour alléger vos fichiers !</p>
                </div>
                <div class="card-footer ">
                  <a href="outils/minifier-css.php" class="btn btn-primary" title="Voir l'outil pour minifier le css">Minifier !</a>
                </div>
              </div>
            </div>     

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card h-100 d-flex flex-column">
                <img src="/img/minifieur-js.webp" class="card-img-top" alt="illustration pour le minifieur de JS"  width="960" height="540">
                <div class="card-body">
                  <h2 class="card-title mb-1 outil-title">Minifier votre JS</h2>
                  <p class="card-text">Collez votre code JS, minifiez-le d’un clic, et copiez le résultat. Pratique pour alléger vos fichiers !</p>
                </div>
                <div class="card-footer ">
                  <button href="outils/minifier-js.php" class="btn btn-primary" title="Voir l'outil pour minifier le JavaScript"  disabled>Bientôt !</button>
                </div>
              </div>
            </div>  

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card h-100 d-flex flex-column">
                <img src="/img/github.webp" class="card-img-top" alt="illustration pour le générateur de commit"  width="960" height="540">
                <div class="card-body">
                  <h2 class="card-title mb-1 outil-title">Générateur de message de commit</h2>
                  <p class="card-text">Quand plus rien ne compile, il vous reste un seul recours.</p>
                </div>
                <div class="card-footer ">
                  <a href="outils/commit-generator.php" class="btn btn-primary" title="Générer un message de commit aléatoire">Générer !</a>
                </div>
              </div>
            </div>  

          </div>
          
      </div>
  </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

</body>
</html>
