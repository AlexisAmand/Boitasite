<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Minifieur JavaScript en ligne – Réduisez votre code JS facilement</title>
  <meta name="description" content="Minifiez gratuitement votre code JavaScript en ligne. Supprimez les espaces, les commentaires et réduisez la taille de vos fichiers JS sans inscription. Rapide, simple et efficace.">

  <link rel="icon" href="/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/outils/minifier-js.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    textarea {
      width: 100%;
      font-family: monospace;
      font-size: 14px;
      /* margin-bottom: 15px; */
    }
    #result-stats {
      margin-top: 10px;
      font-weight: bold;
    }
    .btn {
      width:136px;
    }
    .btn i {
      margin-right: 0.4em;
      vertical-align: middle;
    }

    /* Forcer label à prendre la hauteur du textarea */
    .input-group-text {
      display: flex;
      align-items: center;
      /* Optionnel : padding vertical plus grand si textarea est très haut */
      padding-top: 0.375rem;  
      padding-bottom: 0.375rem;
    }

    /* Et textarea prend toute la hauteur possible */
    textarea.form-control {
      resize: vertical; /* autorise le redimensionnement vertical */
      min-height: 4rem; /* ou la hauteur souhaitée */
    }

    .input-group-text,
textarea.form-control {
  min-height: 175px;
}

@media (max-width: 576px) {
  .input-group-text {
    flex-basis: 40%; /* plus large sur mobile */
    min-width: 120px;
  }
}

.input-group-text {
  white-space: normal;
  word-wrap: break-word;
  overflow-wrap: break-word;
}

  </style>

</head>
<body>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <!-- Minifier votre js -->

<section id="services" class="bg-light py-5">
  <div class="container">
    
    <h1 class="display-5 my-5 text-center">Minifiez votre code JavaScript</h1>

    <div class="row">

      <div class="col-12 text-center mb-2">
        <p class="lead">Cet outil vous permet de compresser votre code JavaScript pour un chargement plus rapide de vos pages.</p>
      </div> 

      <div class="col-12">

        <div class="input-group my-3 align-items-stretch">
          <label for="input-js" class="input-group-text col-form-label col-2 justify-content-center">Collez votre JS ici</label>
          <textarea class="form-control col" id="input-js" placeholder="Ex: console.log('Hello World');" rows="4"></textarea>
        </div>

        <div class="text-end">
        
          <button id="minify-btn" class="btn btn-success">
            <i class="bi bi-arrow-down-circle"></i> Minifier
          </button>

          <button id="reset-btn" class="btn btn-primary">
            <i class="bi bi-arrow-counterclockwise"></i> Reset
          </button>

        </div>

        <div class="input-group my-3 align-items-stretch">
          <label for="output-js" class="input-group-text col-form-label col-2 justify-content-center">JS minifié</label>
          <textarea class="form-control col" id="output-js" rows="4"></textarea>
        </div>

        <div class="text-end">

          <button id="copy-btn" class="btn btn-success">
            <i class="bi bi-clipboard"></i> Copier
          </button>

          <button id="download-btn" class="btn btn-primary">
            <i class="bi bi-download"></i> Télécharger
          </button>

        </div>

        <div id="result-stats"></div>

        <canvas id="chart-stats" class="my-5" width="400" height="0"></canvas>

        <h3>Pourquoi minifier son code JavaScript ?</h3>

        <p class="text-justify">La minification JavaScript consiste à supprimer les espaces, les commentaires et les caractères inutiles d’un fichier .js, sans en altérer le fonctionnement. Cela permet de réduire la taille du fichier, accélérer le chargement des pages web et améliorer les performances globales du site. Un code plus léger signifie aussi une meilleure expérience utilisateur et un <a href="/guide-seo.php" title=" ">référencement (SEO)</a> légèrement favorisé par Google.</p>

        <h3>Est-ce que ce minifieur JS garde mon code privé ?</h3>

        <p class="text-justify">Non. Tous les traitements sont effectués localement dans votre navigateur. Votre code n’est jamais envoyé sur un serveur, ce qui garantit la confidentialité et la sécurité de vos scripts JavaScript. Vous pouvez utiliser cet outil en toute confiance, même pour des projets sensibles ou professionnels.</p>

      </div>
    </div>
  </div>
</section>

<script src="../js/minifier-js.min.js"></script> 


  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="../js/animations.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous" defer></script>

</body>
</html>
