<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">

  <title>Livres HTML, CSS, JavaScript et SEO – Recommandations de livres pour apprendre</title>
  <meta name="description" content="Découvrez ma sélection de livres pour apprendre le développement web, HTML, CSS, JavaScript et SEO. Des ouvrages pour débutants et avancés, avec liens affiliés, guides pratiques et conseils d'experts.">
  
  <link rel="icon" href="/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/boutique.php">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

  <style>
  .card-img-top {
  height: 250px;
  object-fit: contain;
  background-color: #f0f0f0; /* un fond neutre pour les bandes */
  width: 100%;
}

.badge-outline-primary {
  color: #555; /* couleur du texte */
  background-color: transparent;
  border: 1px solid #555;
  font-weight:500;
}

</style>

</head>
<body class="bg-light">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

  <section id="about-me" class="text-center">
    <div class="container">

      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/index.php">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Mes recommandations de lecture</li>
        </ol>
      </nav>

      <h1 class="display-5 my-5">Mes recommandations de lecture</h1>

      <div class="row">
        <div class="col-12 text-center mb-2">
          <p class="lead">Vous cherchez les meilleurs livres pour progresser en web, HTML, CSS, JavaScript ou SEO ? Voici mes recommandations personnelles, sélectionnées avec soin pour vous aider à aller plus loin. Chaque ouvrage est un coup de cœur ou un incontournable.</p>
        </div> 
      <div> 

      

      <div id="filtres-tags" class="mb-4"></div>
        
      <div class="row gx-3 gy-4" id="bibliographie">

      </div>
        
    </div>
  </section>


  <script>
let tousLesLivres = [];

function afficherBooks(livres) {
  const container = document.getElementById('bibliographie');
  container.innerHTML = '';
  livres.forEach(book => {
    const card = document.createElement('div');
    card.className = 'col-12 col-sm-6 col-md-4 col-lg-3';
    
    const tagsHTML = book.tags ? book.tags.map(tag => `
      <span class="badge badge-outline-primary me-1 mb-1 tag-badge" data-tag="${tag}" style="cursor:pointer;">${tag}</span>
    `).join('') : '';

    card.innerHTML = `
      <div class="card h-100">
        <a href="${book.affiliate_link}" target="_blank">
          <img src="${book.image}" class="card-img-top" alt="${book.title}">
        </a>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">${book.title}</h5>
          <p class="card-text"><strong>${book.author}</strong></p>
          <p class="card-text">${book.summary}</p>
          <div class="mb-2">${tagsHTML}</div>
          <a href="${book.affiliate_link}" class="btn btn-sm btn-primary mt-auto" target="_blank">Voir sur Amazon</a>
        </div>
      </div>
    `;
    container.appendChild(card);
  });

  // Ajouter des listeners sur les badges
  document.querySelectorAll('.tag-badge').forEach(badge => {
    badge.addEventListener('click', () => {
      const tag = badge.dataset.tag;
      const filtrés = tousLesLivres.filter(l => l.tags && l.tags.includes(tag));
      afficherBooks(filtrés);
    });
  });
}


function afficherFiltresTags(livres) {
  const tagsSet = new Set();
  livres.forEach(livre => {
    if (livre.tags) {
      livre.tags.forEach(tag => tagsSet.add(tag));
    }
  });

  const container = document.getElementById('filtres-tags');
  container.innerHTML = '';

  const tousBtn = document.createElement('button');
  tousBtn.className = 'btn btn-outline-primary btn-sm me-2 mb-2';
  tousBtn.textContent = 'Tous';
  tousBtn.onclick = () => afficherBooks(tousLesLivres);
  container.appendChild(tousBtn);

  tagsSet.forEach(tag => {
    const btn = document.createElement('button');
    btn.className = 'btn btn-outline-secondary btn-sm me-2 mb-2';
    btn.textContent = tag;
    btn.onclick = () => {
      const filtrés = tousLesLivres.filter(l => l.tags && l.tags.includes(tag));
      afficherBooks(filtrés);
    };
    container.appendChild(btn);
  });
}

Promise.all([
  fetch('tutos/json/biblio.json').then(r => r.json()),
  fetch('tutos/json/biblio-ascii.json').then(r => r.json()),
  fetch('tutos/json/biblio-color.json').then(r => r.json()),
  fetch('tutos/json/biblio-html.json').then(r => r.json()),
  fetch('tutos/json/biblio-seo.json').then(r => r.json())
])
.then(([diversBooks, asciiBooks, asciiColor, htmlBooks, seoBooks]) => {
  tousLesLivres = [...diversBooks, ...asciiBooks, ...asciiColor, ...htmlBooks, ...seoBooks];

  // AJOUT ICI
  const titresVus = new Set();
  tousLesLivres = tousLesLivres.filter(book => {
    if (titresVus.has(book.title)) return false;
    titresVus.add(book.title);
    return true;
  });

  tousLesLivres.sort((a, b) => a.title.localeCompare(b.title, 'fr', { sensitivity: 'base' }));

  afficherBooks(tousLesLivres);
  afficherFiltresTags(tousLesLivres);
})

.catch(err => console.error("Erreur de chargement :", err));
</script>


  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="js/animations.min.js"></script>

</body>
</html>
