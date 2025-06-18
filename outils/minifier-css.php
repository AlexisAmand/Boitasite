<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Minifiez ou compressez votre CSS en ligne – Gratuit, rapide, sans pub</title>
  <meta name="description" content="Outil gratuit pour minifier ou compresser votre code CSS en ligne. Réduisez la taille de vos fichiers CSS pour accélérer votre site web. Aucun téléchargement requis.">

  <link rel="icon" href="/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/outils/minifier-css.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    textarea {
      width: 100%;
      height: 200px;
      font-family: monospace;
      font-size: 14px;
      margin-bottom: 15px;
    }
    #result-stats {
      margin-top: 10px;
      font-weight: bold;
    }
    .btn i {
      margin-right: 0.4em;
      vertical-align: middle;
    }
  </style>

</head>
<body>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <!-- Minifier votre CSS -->

<section id="services" class="bg-light py-5">
  <div class="container">
    
    <h1 class="display-5 my-5 text-center">Minifier votre CSS</h1>

    <div class="row">

      <div class="col-12 text-center mb-2">
        <p class="lead">Cet outil vous permet de compresser votre code CSS pour un chargement plus rapide de vos pages.</p>
      </div> 

      <div class="col-12">
    
        <div class="my-3">
          <label for="input-css" class="form-label">Collez votre CSS ici :</label>
          <textarea class="form-control" id="input-css" rows="3" placeholder="Exemple : body { color: red; }"></textarea>
        </div>

        <button id="minify-btn" class="btn btn-success">
          <i class="bi bi-arrow-down-circle"></i> Minifier
        </button>

        <button id="copy-btn" class="btn btn-outline-secondary">
          <i class="bi bi-clipboard"></i> Copier
        </button>

        <button id="reset-btn" class="btn btn-primary">
          <i class="bi bi-arrow-counterclockwise"></i> Reset
        </button>

        <button id="download-btn" class="btn btn-info">
          <i class="bi bi-download"></i> Télécharger
        </button>

        <div class="my-3">
          <label for="output-css" class="form-label">CSS minifié :</label>
          <textarea class="form-control" id="output-css" rows="3" readonly></textarea>
        </div>

        <div id="result-stats"></div>

        <canvas id="chart-stats" class="my-5" width="400" height="0"></canvas>
        
      </div>
    </div>
  </div>
</section>

<script src="../js/minifier-css.min.js"></script> 


  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="../js/animations.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous" defer></script>

</body>
</html>
