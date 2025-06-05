
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Services de développement web et référencement à Valenciennes | Alexis AMAND</title>
  <meta name="description" content="Découvrez mes services personnalisés de développement web, référencement SEO et accompagnement digital, pour booster votre présence en ligne dans la région lilloise.">

  <link rel="icon" href="/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/services.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

</head>
<body>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <!-- Services -->
  <section id="services" class="bg-light py-5">
      <div class="container text-center">
        <h2 class="display-5 my-5">Mes services web</h2>
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


  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="js/animations.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous" defer></script>


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
