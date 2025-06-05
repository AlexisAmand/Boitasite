
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
