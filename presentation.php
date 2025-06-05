<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Développeur web passionné basé à Lille | Alexis AMAND</title>
  <meta name="description" content="Découvrez le parcours d’Alexis AMAND, développeur web et référent digital dans le Nord, passionné par le design, l’histoire et la création de projets web sur mesure.">

  <link rel="icon" href="/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/presentation.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

  <style>

    img {
  max-height: 350px;
  object-fit: contain;
}

@media (max-width: 768px) {
  img {
    max-height: 250px;
    margin-bottom: 20px;
  }
}

/* Par défaut width à 100% */
.img-responsive-custom {
  width: 100%;
}

/* À partir de md (min-width:768px), width à 75% */
@media (min-width: 768px) {
  .img-responsive-custom {
    width: 75%;
  }
}

</style>

</head>
<body>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <section id="about-me" class="py-5 bg-white text-center">
    <div class="container">
      <h2 class="display-5 my-5">Qui suis-je ?</h2>

      <div class="row align-items-center justify-content-center">
        <div class="col-md-6 order-2 order-md-1 d-flex align-items-center">
          <div class="w-100">
            <p>
              Je m'appelle Alexis AMAND, développeur web et référent digital basé dans le Nord. Passionné par l'histoire, la généalogie et le design web, je combine mes compétences techniques à une forte culture générale pour proposer des sites efficaces, bien référencés et agréables à utiliser.
            </p>

            <p>
              Diplômé en informatique et formé récemment au métier de référent digital, j’ai également une solide expérience en tant que correspondant de presse. Cette pluralité d’expériences me permet d’allier rigueur, sens de la narration et souci du détail dans chacun de mes projets.
            </p>

            <p>
              Curieux de nature, j’aime explorer de nouvelles technologies, imaginer des interfaces claires et accessibles, et raconter des histoires — que ce soit à travers un site web, un article ou un jeu vidéo indépendant.
            </p>

            <p>
              N’hésitez pas à <a href="#contact">me contacter</a> si vous avez un projet web, une idée à creuser ou simplement envie d’échanger autour du numérique et de la création !
            </p>
          </div>
        </div>

        <div class="col-md-4 order-1 order-md-2 text-center mb-4 mb-md-0">
          <img src="/img/panda-01.jpg" class="img-fluid rounded shadow" alt="Panda travaillant sur un ordinateur">
        </div>

      </div>

    </div>
  </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="js/animations.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
