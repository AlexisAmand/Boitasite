<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Générateur de messages de commit Git | Outil pour développeurs pressés (ou inspirés)</title>

  <meta name="description" content="En panne d'inspiration pour vos messages de commit ? Générez en un clic des messages clairs, techniques ou décalés. Utile, rapide, fun.">

  <link rel="icon" href="/dist/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/outils/commit-generator.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
  #dice {
    font-size: 5rem;
    cursor: pointer;
    user-select: none;
    transition: transform 0.4s ease;
    margin-bottom: 1rem;
    display: inline-block;
  }

  #commit-message {
    width: 100%;
    max-width: 480px;
    font-size: 1.2rem;
    resize: none;
    text-align: center;
    margin-bottom: 1rem;
  }
  
  #copy-btn {
    max-width: 480px;
    width: 100%;
  }

  .commit-tool {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem; /* espace entre les éléments */
  }

  </style>

</head>
<body class="bg-light">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

<section id="services">
  <div class="container">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/index.php">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/outils.php">Outils web</a></li>
        <li class="breadcrumb-item active" aria-current="page">Générateur de message de commit</li>
      </ol>
    </nav>
    
    <h1 class="display-5 my-5 text-center">Générateur de message de commit</h1>

    <div class="row">

      <div class="col-12 commit-tool">
        <div id="dice" title="Cliquez pour générer un message de commit">🎲</div>

        <textarea id="commit-message" rows="3" readonly placeholder="Cliquez sur le dé pour générer un message"></textarea>

        <button id="copy-btn" class="btn btn-primary">📋 Copier le message</button>
      </div>

    </div>

  </div>
</section>

  <script>
const messages = {
  pro: [
    'feat: ajout d’un système de minification',
    'fix: correction d’un bug responsive',
    'refactor: nettoyage du CSS en double',
    'ci: mise à jour du workflow CI/CD'
  ],
  fun: [
    '🪄 abracadabra, le bug a disparu',
    '🧹 ménage de printemps dans le code',
    '🪛 rafistolage maison (mais ça marche)',
    '🚀 code prêt pour le décollage',
    'Ajout d’un correctif miracle, prière de ne pas toucher',
    'C’est pas moi, c’est l’autre développeur',
    'J’ai juste appuyé sur une touche, ça a marché',
    'Code stable… pour l’instant',
    'Refactoring en mode freestyle',
    'Suppression du bug qui faisait peur à tout le monde',
    'On ne sait pas pourquoi, mais ça compile',
    'Patch du dernier espoir',
    'Correction de la faute qui nous coûtait des heures',
    'J’ai viré du code mort, il peut enfin reposer en paix',
    'Ça marche chez moi, à vos risques et périls',
    'Version bêta qui a passé l’alpha',
    'Ajout d’un peu de magie noire dans le code',
    'Les aliens ont réparé le bug pendant la nuit',
    'On ne touche plus à ça, c’est sacré',
    'Code optimisé pour éviter la sieste des utilisateurs',
    'J’ai fait un truc, je ne sais pas quoi exactement, mais ça marche',
    'Suppression des erreurs qui faisaient buguer l’ordinateur de Mamie',
    'Version du code testée sur ma machine, et chez moi ça tourne',
    'Code amélioré avec amour et caféine'
  ],
  gitmoji: [
    '✨ feat: nouvelle feature implémentée',
    '🐛 fix: correction d’un bug mineur',
    '🔥 remove: suppression de code dormant',
    '🎨 style: ajustement du design CSS',
    '📝 docs: mise à jour du README',
    '🚀 chore: déploiement en production'
  ]
};

const allMessages = [...messages.pro, ...messages.fun, ...messages.gitmoji];
const dice = document.getElementById('dice');
const commitMessage = document.getElementById('commit-message');
const copyBtn = document.getElementById('copy-btn');

// 🎲 Clique sur le dé
dice.addEventListener('click', () => {
  const random = allMessages[Math.floor(Math.random() * allMessages.length)];
  commitMessage.value = random;

  // Animation du dé
  dice.style.transform = 'rotate(360deg)';
  setTimeout(() => {
    dice.style.transform = 'rotate(0deg)';
  }, 400);
});

// 📋 Clique sur "Copier"
copyBtn.addEventListener('click', () => {
  const msg = commitMessage.value;
  if (!msg) {
    alert('Cliquez d’abord sur le dé pour générer un message.');
    return;
  }

  // Méthode moderne
  if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard.writeText(msg)
      .then(() => alert('Message copié !'))
      .catch(() => fallbackCopy(msg));
  } else {
    fallbackCopy(msg);
  }
});

// 🧙‍♂️ Fallback : copier via execCommand
function fallbackCopy(text) {
  const tempInput = document.createElement('textarea');
  tempInput.value = text;
  tempInput.setAttribute('readonly', '');
  tempInput.style.position = 'absolute';
  tempInput.style.left = '-9999px';
  document.body.appendChild(tempInput);
  tempInput.select();

  try {
    const success = document.execCommand('copy');
    alert(success ? 'Message copié ! (via fallback)' : 'Impossible de copier.');
  } catch (err) {
    alert('La fonction de copie n’est pas supportée par votre navigateur.');
  }

  document.body.removeChild(tempInput);
}

  </script>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="../js/animations.min.js"></script>
  
</body>
</html>