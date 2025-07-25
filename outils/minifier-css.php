<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Minifiez ou compressez votre CSS en ligne – Gratuit, rapide, sans pub</title>
  <meta name="description" content="Outil gratuit pour minifier ou compresser votre code CSS en ligne. Réduisez la taille de vos fichiers CSS pour accélérer votre site web. Aucun téléchargement requis.">

  <link rel="icon" href="/dist/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/outils/minifier-css.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
  textarea {
    width: 100%;
    font-family: monospace;
    font-size: 14px;
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

  .input-group-text {
    display: flex;
    align-items: center;
    padding-top: 0.375rem;  
    padding-bottom: 0.375rem;
  }

  textarea.form-control {
    resize: vertical;
    min-height: 4rem; 
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
<body class="bg-light">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <!-- Minifier votre CSS -->

<section id="services">
  <div class="container">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/index.php">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/outils.php">Outils web</a></li>
        <li class="breadcrumb-item active" aria-current="page">Minifieur de CSS</li>
      </ol>
    </nav>
    
    <h1 class="display-5 my-5 text-center">Minifier votre CSS</h1>

    <div class="row">

      <div class="col-12 text-center mb-2">
        <p class="lead">Cet outil vous permet de compresser votre code CSS pour un chargement plus rapide de vos pages.</p>
      </div> 

      <div class="col-12">

        <div class="input-group my-3 align-items-stretch">
          <label for="input-css" class="input-group-text col-form-label col-2 justify-content-center">Collez votre CSS ici</label>
          <textarea class="form-control col" id="input-css" placeholder="Ex : body { color: red; }" rows="4"></textarea>
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
          <label for="output-css" class="input-group-text col-form-label col-2 justify-content-center"> minifié</label>
          <textarea class="form-control col" id="output-css" rows="4"></textarea>
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
        
      </div>
    </div>
  </div>
</section>

<script src="../js/minifier-css.min.js"></script> 

<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

</body>
</html>
