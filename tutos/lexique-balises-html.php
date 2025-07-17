<?php
$balises = json_decode(file_get_contents('json/balises.json'), true);

$categories = [];
foreach ($balises as $b) {
  $cat = $b['category'] ?? 'Autres';
  $categories[$cat][] = $b['tag'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">

  <title>Lexique des balises HTML | Alexis AMAND</title>
  <meta name="description" content="Lexique des balises HTML avec exemples et attributs. Un outil simple pour développeurs web, débutants ou confirmés. Découvrez vite ce guide complet !">

  <link rel="icon" href="/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/lexique-balises-html.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

  <link href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet" />

  <!-- CSS spécifique lexique -->
  <style>
  pre {
    background-color: #1e1e1e;       /* fond sombre */
    color: #d4d4d4;                  /* texte clair */
    padding: 1rem;
    border-radius: 8px;
    font-family: 'Fira Code', Consolas, Monaco, 'Courier New', monospace;
    font-size: 0.9rem;
    line-height: 1.4;
    overflow-x: auto;                /* scroll horizontal si nécessaire */
    box-shadow: inset 0 0 10px #000000aa;
    user-select: text;
    white-space: pre-wrap;           /* pour que le texte puisse aussi à la ligne */
  }

 table { 
    width: 100%; 
    border-collapse: collapse; 
    margin-top: 1rem; 
  }
  
  th, td { 
    border: 1px solid #ccc; 
    padding: 0.4rem 0.7rem; 
    text-align: left; 
  }

  th { 
    background: #a0c4ff; 
  }
  
  a.anchor { 
    color: #2674b6; 
    text-decoration: none; 
    margin-left: 0.5rem; 
    font-weight: normal; 
  }

  a.anchor:hover {
    text-decoration: underline; 
  }

  .offcanvas-body {
    overflow-y: auto;
    max-height: 80vh;
  }

  .anchor {
    text-decoration: none;
    color: #0d6efd;
    margin-left: 0.3rem;
  }

  .card-img-top {
    height: 250px;
    object-fit: contain;
    background-color: #f0f0f0; /* un fond neutre pour les bandes */
    width: 100%;
  }
  </style>
</head>
<body>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <section id="dico" class="py-5 bg-white">
    <div class="container">
      <h1 class="my-5 text-center">Lexique des balises HTML</h1>

      <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSommaire" aria-controls="offcanvasSommaire">
        Ouvrir le sommaire des balises
      </button>

      <p class="lead">Je vous propose les balises HTML que l’on utilise souvent lorsqu’<a href="../services.php" title=" ">on crée des pages web</a>. Pour chaque balise, je vous explique simplement à quoi elle sert, je vous montre un petit exemple pour que ce soit clair, et je vous liste ses attributs dans un tableau avec le nom, ce que ça fait, et un exemple d’utilisation. Que vous soyez débutant ou un peu plus calé, ce lexique est fait pour vous filer un coup de main rapide et pratique.</p>

      <?php foreach ($balises as $balise): ?>
        <article id="<?= htmlspecialchars($balise['tag']) ?>">
          <h2 class="mt-5">
            &lt;<?= htmlspecialchars($balise['tag']) ?>&gt;
          </h2>
          <p><?= htmlspecialchars($balise['description']) ?></p>
          <pre><code class="language-markup"><?= htmlspecialchars($balise['example']) ?></code></pre>

          <?php if (!empty($balise['attributes'])): ?>
            <h3>Attributs</h3>
            <table aria-label="Attributs de la balise <?= htmlspecialchars($balise['tag']) ?>">
              <thead>
                <tr><th>Nom</th><th>Description</th><th>Exemple</th></tr>
              </thead>
              <tbody>
                <?php foreach ($balise['attributes'] as $attr): ?>
                  <tr>
                    <td><?= htmlspecialchars($attr['name']) ?></td>
                    <td><?= htmlspecialchars($attr['desc']) ?></td>
                    <td><code><?= htmlspecialchars($attr['example']) ?></code></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          <?php endif; ?>

        </article>
      <?php endforeach; ?>

      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSommaire" aria-labelledby="offcanvasSommaireLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasSommaireLabel">Sommaire des balises</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fermer"></button>
        </div>
        <div class="offcanvas-body">

          <input type="text" id="filterInput" class="form-control mb-3" placeholder="Rechercher une balise..." />

          <?php foreach ($categories as $cat => $tags): ?>
          <details open>
            <summary><strong><?= htmlspecialchars($cat) ?></strong></summary>
            <ul class="list-unstyled ps-3">
              <?php foreach ($tags as $tag): ?>
                <li><a href="#<?= htmlspecialchars($tag) ?>" class="offcanvas-link"><?= htmlspecialchars($tag) ?></a></li>
              <?php endforeach; ?>
            </ul>
          </details>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </section>

  <section id="dico" class="py-5 bg-white">
    <div class="container">
      <h2 class="my-5 text-center">Bibliographie</h2>
      <div id="bibliographie" class="row gx-3 gy-4"></div>
    </div>
  </section>

  <script src="../js/biblio-html.min.js"></script>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="../js/animations.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup.min.js"></script>

  <script>
    const offcanvasElement = document.getElementById('offcanvasSommaire');
    const offcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvasElement);

    const links = offcanvasElement.querySelectorAll('a.offcanvas-link');

    links.forEach(link => {
      link.addEventListener('click', function(event) {
        event.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetElem = document.getElementById(targetId);

        offcanvas.hide();

        setTimeout(() => {
          targetElem.scrollIntoView({behavior: 'smooth'});
          targetElem.setAttribute('tabindex', '-1');
          targetElem.focus();
        }, 350);
      });
    });

    // Filtre dynamique du sommaire
    const filterInput = document.getElementById('filterInput');
    filterInput.addEventListener('input', () => {
      const filter = filterInput.value.toLowerCase();
      const links = document.querySelectorAll('.offcanvas-link');
      links.forEach(link => {
        const text = link.textContent.toLowerCase();
        link.parentElement.style.display = text.includes(filter) ? '' : 'none';
      });
    });
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "TechArticle",
    "headline": "Lexique des balises HTML",
    "author": {
      "@type": "Person",
      "name": "Alexis AMAND"
    },
    "description": "Lexique des balises HTML avec exemples et attributs. Un outil simple pour développeurs web.",
    "url": "https://www.boitasite.com/lexique-balises-html.php",
    "inLanguage": "fr"
  }
  </script>

</body>
</html>