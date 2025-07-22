
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Ressources en ligne | Alexis AMAND - Création de sites web à Valenciennes</title>
  <meta name="description" content="Découvrez mes services personnalisés de développement web, référencement SEO et accompagnement digital, pour booster votre présence en ligne dans la région lilloise.">

  <link rel="icon" href="/dist/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/ressources.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

</head>
<body class="bg-light">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <!-- Services -->
  <section id="services">
      <div class="container text-center">

      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/index.php">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Ressources et guides</li>
        </ol>
      </nav>

      <h1 class="display-5 my-5">Ressources et guides</h1>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 d-flex flex-column">
            <img src="/img/html.webp" class="card-img-top" alt=" " width="1024" height="683">
            <div class="card-body">
              <h5 class="card-title mb-1">Lexique du HTML</h5>
              <p class="card-text"><small class="text-body-secondary">Le 21 juillet 2025</small></p>
              <p class="card-text">Découvrez un lexique complet des balises HTML avec leurs attributs et usages, idéal pour débutants comme développeurs confirmés.</p>
            </div>
            <div class="card-footer ">
              <a href="tutos/lexique-balises-html.php" title=" ">En savoir plus</a>
            </div>
          </div>
        </div> 
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 d-flex flex-column">
            <img src="/img/ascii.webp" class="card-img-top" alt="Illustration pour le guide sur les codes ASCII" width="1024" height="683">
            <div class="card-body">
              <h5 class="card-title mb-1">Les codes ASCII</h5>
              <p class="card-text"><small class="text-body-secondary">Le 13 juin 2025</small></p>
              <p class="card-text">Découvrez comment les codes ASCII permettent de représenter des caractères et symboles essentiels dans l’informatique, et comment les utiliser dans vos projets web.</p>
            </div>
            <div class="card-footer ">
              <a href="code-ascii.php" title="Lire le guide sur les codes ASCII">En savoir plus</a>
            </div>
          </div>
        </div>     
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 d-flex flex-column">
            <img src="/img/seo.webp" class="card-img-top" alt="Illustration pour le guide sur le référencement naturel" width="1025" height="683">
            <div class="card-body">
              <h5 class="card-title mb-1">Référencement naturel (SEO)</h5>
              <p class="card-text"><small class="text-body-secondary">Le 12 juin 2025</small></p>
              <p class="card-text">Comprenez les bases du SEO pour optimiser la visibilité de votre site sur les moteurs de recherche et attirer un trafic qualifié.</p>
            </div>
            <div class="card-footer">
              <a href="guide-seo.php" title="Lire le guide sur le référencement naturel">En savoir plus</a>
            </div>       
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 d-flex flex-column">
            <img src="/img/color-web.webp" class="card-img-top" alt="Illustration pour le guide sur les couleurs du web" width="1024" height="684">
            <div class="card-body">
              <h5 class="card-title mb-1">Les couleurs du web</h5>
              <p class="card-text"><small class="text-body-secondary">Le 6 juin 2025</small></p>
              <p class="card-text">Apprenez à maîtriser les couleurs en CSS : noms, codes hex, RGB, et HSL. Choisissez vos couleurs facilement grâce à notre palette interactive et découvrez les nuances officielles reconnues par les navigateurs.</p>
            </div>
            <div class="card-footer">
              <a href="codes-couleurs.php" title="Lire le guide sur les codes couleurs">En savoir plus</a>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="js/animations.min.js"></script> 
  
</body>
</html>
