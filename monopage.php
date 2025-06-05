
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Développeur web indépendant à Valenciennes – Alexis Amand</title>
  <meta name="description" content="Alexis Amand, développeur web indépendant à Valenciennes : création de sites internet sur mesure, optimisation SEO, refonte, maintenance et accompagnement digital. Sites vitrines, blogs ou projets personnalisés. Contactez-moi pour un devis gratuit.">

  <!-- Canonical -->
  <link rel="canonical" href="https://www.boitasite.com/index.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

</head>
<body>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <!-- En-tête avec Image de fond -->
  <header class="hero-section">
    <div class="container hero-overlay">
      <h1  class="display-4">Création de sites web à Valenciennes</h1>
      <p class="lead">Un site efficace, beau et bien référencé, conçu sur mesure pour votre activité</p>
      <a href="#services" class="btn btn-secondary btn-lg">Découvrez mes services</a>
    </div>
  </header>

  <!-- Services -->
  <section id="services" class="bg-light py-5">
      <div class="container text-center">
        <h2 class="display-5 mb-5">Mes services web</h2>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 d-flex flex-column">
            <div class="card-body">
              <div class="services-icon mb-3">&#x1F4DD;</div>
              <h5 class="card-title mb-4">Rédaction Web</h5>
              <p class="card-text">Création de contenus optimisés SEO pour votre site internet, blog ou réseaux sociaux. Articles de blog, pages de site, fiches produits…<br /><br />J’écris avec des mots-clés pertinents pour améliorer votre visibilité sur Google.</p>
            </div>
            <div class="card-footer ">
              <a href="https://lexisio.boitasite.com/index.php#services" title=" ">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 d-flex flex-column">
            <div class="card-body">
              <div class="services-icon mb-3">&#x1F50D;</div>
              <h5 class="card-title mb-4">Création de sites web</h5>
              <p class="card-text">Site vitrine, blog ou site professionnel : je conçois un site adapté à vos besoins, moderne, responsive, rapide et facile à prendre en main.<br /><br />Du design à la mise en ligne, je vous accompagne à chaque étape pour un résultat sur mesure.</p>
            </div>
            <div class="card-footer"><strong>Sur devis</strong></div>
          </div>
        </div>       
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 d-flex flex-column">
            <div class="card-body">
              <div class="services-icon mb-3">&#x1F4BE;</div>
              <h5 class="card-title mb-4">Référencement naturel (SEO)</h5>
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

  <!-- Portfolio -->
  <section id="portfolio" class="bg-light py-5">
    <div class="container text-center">
    <h2 class="display-5 mb-5">Mon portfolio</h2>

    <div class="row">
      <div class="col-12 text-center">
        <p class="lead">  Voici quelques exemples de sites web que j’ai réalisés pour des entreprises, associations et indépendants. 
  Chaque projet est conçu sur mesure, avec une attention particulière portée à la performance, au référencement naturel (SEO) et à l’expérience utilisateur.</p>
      </div> 
    <div> 
    
      <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/portfolio.inc.php'; ?>

    </div>

  </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/faq.inc.php'; ?>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="js/animations.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous" defer></script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Alexis Amand",
    "image": "https://www.boitasite.com/screenshot.jpg",
    "description": "Création de sites Internet vitrines pour TPE, indépendants et associations.",
    "url": "https://www.boitasite.com/",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Valenciennes",
      "addressCountry": "FR"
    },
    "telephone": "+33 6 62 63 79 21"
  }
  </script>

  <script>

const colors = ['postit-yellow', 'postit-pink', 'postit-green', 'postit-blue'];

document.querySelectorAll('.card-body-faq').forEach(el => {
  // enlever la rotation initiale pour que hover remette à 0deg
  el.style.transform = 'rotate(' + ((Math.random() * 10) - 5) + 'deg)';

  // ajouter une couleur aléatoire
  const color = colors[Math.floor(Math.random() * colors.length)];
  el.classList.add(color);
});

  </script>


</body>
</html>
