<!-- Vague décorative SVG -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none" style="display:block; width: 100%; height: 60px; margin-bottom: -1px; transform: rotateX(180deg);">
  <path fill="#1d1f2f" fill-opacity="1" d="M0,0L1440,0L1440,50C1222,100,945,100,720,50C495,0,268,0,0,50Z"></path>
</svg>

<!-- Footer -->
<footer class="py-5 text-center" style="background-color: #1d1f2f;" role="contentinfo">
  <div class="container">
    <div class="row mb-4">

      <!-- Colonne contact -->
      <div class="col-md-4 d-flex flex-column justify-content-center align-items-center text-center mb-4 mb-md-0">
        <!-- Logo (optionnel) -->
        <!-- <img src="img/logo-blanc.png" alt="Logo Boitasite" width="80" class="mb-3"> -->
        <address>
          <strong>Alexis Amand</strong><br>
          Création de sites web à Valenciennes<br>
          <a href="mailto:alexis.amand@boitasite.com" class="text-decoration-none">alexis.amand@boitasite.com</a><br>
          06 62 63 79 21
        </address>
            <div id="ecoindex-badge" class="mt-2" data-theme="dark"></div>
            <script src="https://cdn.jsdelivr.net/gh/cnumr/ecoindex_badge@3/assets/js/ecoindex-badge.js" defer></script>
      </div>

      <!-- Colonne liens -->
      <div class="col-md-4">
        <h5 class="text-uppercase mb-3">Liens utiles</h5>
        <ul class="list-unstyled">
          <li><a href="presentation.php" class="text-decoration-none">Qui suis-je ?</a></li>
          <li><a href="services.php" class="text-decoration-none">Services</a></li>
          <li><a href="https://lexisio.boitasite.com" class="text-decoration-none">Rédaction web</a></li>
          <li><a href="portfolio.php" class="text-decoration-none">Portfolio</a></li>
          <li><a href="ressources.php" class="text-decoration-none">Ressources</a></li>
          <li><a href="faq.php" class="text-decoration-none">FAQ</a></li>
          <li><a href="mentions-legales.php" class="text-decoration-none">Mentions légales</a></li>
        </ul>
      </div>

      <!-- Colonne réseaux -->
      <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
        <h5 class="text-uppercase mb-3">Suivez-moi</h5>
        <div class="d-flex justify-content-center gap-3">

          <a href="https://x.com/alexisamand" target="_blank" aria-label="Twitter/X">
            <i class="bi bi-twitter-x fs-4"></i>
          </a>
          <a href="https://www.facebook.com/alexisamand" target="_blank" aria-label="Facebook">
            <i class="bi bi-facebook fs-4"></i>
          </a>
          <a href="https://github.com/alexisAmand" target="_blank" aria-label="GitHub">
            <i class="bi bi-github fs-4"></i>
          </a>
          <a href="https://www.linkedin.com/in/alexis-amand" target="_blank" aria-label="LinkedIn">
            <i class="bi bi-linkedin fs-4"></i>
          </a>

        </div>
      </div>
    </div>

    <!-- Bas de page -->
    <div class="text-secondary small">
      © 2025 Alexis AMAND – Tous droits réservés.<br>
      Fait avec ❤️ dans les Hauts-de-France.
    </div>
  </div>
</footer>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Boitasite",
    "url": "https://www.boitasite.com/",
    "logo": "https://www.boitasite.com/img/logo.png",
    "description": "Création de sites Internet vitrines pour TPE, indépendants et associations.",
    "priceRange": "€€",
    "telephone": "+33 6 62 63 79 21",
    "openingHours": "Mo-Fr 09:30-17:30",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Valenciennes",
      "addressCountry": "FR"
    },
    "sameAs": [
      "https://www.linkedin.com/in/alexis-amand/",
      "https://github.com/alexisAmand",
      "https://twitter.com/alexisamand"
    ],
    "founder": {
      "@type": "Person",
      "name": "Alexis Amand",
      "jobTitle": "Développeur web et référent digital",
      "url": "https://www.boitasite.com/",
      "sameAs": [
        "https://www.linkedin.com/in/alexis-amand/",
        "https://github.com/alexisAmand",
        "https://twitter.com/alexisamand"
      ],
      "alumniOf": {
        "@type": "EducationalOrganization",
        "name": "Université de Valenciennes"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Valenciennes",
        "addressCountry": "FR"
      }
    }
  }
  </script>

  <script>

    document.querySelectorAll('footer a').forEach(a => {
  a.addEventListener('mouseenter', () => console.log('hover sur un lien footer'));
});

</script>

<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/backtotop.inc.php'; ?>
