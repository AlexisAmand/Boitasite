
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Développement web et référencement à Valenciennes | Alexis AMAND</title>
  <meta name="description" content="Création de sites internet à Valenciennes, près de Lille. Services de développement web, référencement SEO et accompagnement digital pour booster votre présence en ligne dans le Valenciennois.">

  <link rel="canonical" href="https://www.boitasite.com/services.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

  <style>
    
  h2.lead {
  font-family: 'Roboto', sans-serif;  
  font-size: 1.25rem;  /* taille comme lead */
  font-weight: 300;
  line-height: 1.5;
  margin-top: 0;
  margin-bottom: 1.5rem;
  color: #555;         /* couleur douce */
  }

  h3 {
  font-family: 'Roboto', sans-serif;
  font-size: 1.25rem;  
  }

  .first-letter {
    color:var(--bs-card-title-color) !important;
    display: inline-block;
  }
  </style>

</head>
<body class="bg-light">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <!-- Services -->
  <section id="services">
      <div class="container text-center">

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
          </ol>
        </nav>

      <h1 class="display-5 my-5">Mes services web</h1>
      <h2 class="lead mb-5">Création de sites internet, référencement naturel (SEO) et rédaction web,<br /> le tout optimisé pour maximiser votre visibilité en ligne.</h2>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 d-flex flex-column">
            <img src="/img/redaction-web.webp" class="card-img-top" alt="illustration pour la rédaction web" width="1024" height="683">
            <div class="card-body">
              <h3 class="card-title mb-4"><span class="first-letter">R</span>édaction Web</h3>
              <p class="card-text">Création de contenus optimisés SEO pour votre site internet, blog ou réseaux sociaux. Articles de blog, pages de site, fiches produits…<br /><br />J’écris avec des mots-clés pertinents pour améliorer votre visibilité sur Google.</p>
            </div>
            <div class="card-footer ">
              <a href="https://lexisio.boitasite.com/index.php#services" title="Service de rédaction web à Valenciennes">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 d-flex flex-column">
            <img src="/img/web02.webp" class="card-img-top" alt="illustration pour la création de site web" width="1024" height="683">
            <div class="card-body">
              <h3 class="card-title mb-4"><span class="first-letter">C</span>réation de sites web</h3>
              <p class="card-text">Site vitrine, blog ou site professionnel : je conçois un site adapté à vos besoins, moderne, responsive, rapide et facile à prendre en main.<br /><br />Du design à la mise en ligne, je vous accompagne à chaque étape pour un résultat sur mesure.</p>
            </div>
            <div class="card-footer"><strong>Sur devis</strong></div>
          </div>
        </div>       
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 d-flex flex-column">
            <img src="/img/seo.webp" class="card-img-top" alt="illustration pour le SEO" width="1024" height="683">
            <div class="card-body">
              <h3 class="card-title mb-4"><span class="first-letter">R</span>éférencement naturel (SEO)</h5>
              <p class="card-text">Audit technique, optimisation des balises, structure de contenu, maillage interne… <br /><br />Je vous aide à améliorer la visibilité de votre site sur les moteurs de recherche, pour attirer un trafic qualifié et durable.</p>
            </div>
              <div class="card-footer"><strong>Sur devis</strong></div>        
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <p class="lead my-5">Chaque besoin est unique : c’est pourquoi je vous propose un devis personnalisé, transparent et sans engagement.<br />N’hésitez pas à <a href="#contact">me contacter</a> pour en discuter !</p>
      </div> 
    <div> 
  </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>
  
</body>
</html>
