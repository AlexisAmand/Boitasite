 fetch('/tutos/json/biblio-ascii.json')
    .then(response => response.json())
    .then(data => {
      const container = document.getElementById('bibliographie');
      data.forEach(book => {
        // Créer une colonne responsive Bootstrap
        const col = document.createElement('div');
        col.className = 'col-12 col-sm-6 col-md-4 col-lg-3';

        // Créer la card
        const card = document.createElement('div');
        card.className = 'card h-100'; // h-100 pour que toutes les cards aient la même hauteur

        card.innerHTML = `
          <a href="${book.affiliate_link}" target="_blank" rel="noopener noreferrer">
            <img src="${book.image}" class="card-img-top" alt="${book.title}">
          </a>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">
              <a href="${book.affiliate_link}" target="_blank" rel="noopener noreferrer" class="text-decoration-none">${book.title}</a>
            </h5>
            <p class="card-text"><strong>${book.author}</strong></p>
            <p class="card-text flex-grow-1"><small>${book.summary}</small></p>
            <a href="${book.affiliate_link}" target="_blank" rel="noopener noreferrer" class="btn btn-primary mt-auto">Voir sur Amazon</a>
          </div>
        `;

        // Ajouter la card dans la colonne
        col.appendChild(card);
        // Ajouter la colonne dans le container
        container.appendChild(col);
      });
    })
    .catch(err => console.error('Erreur chargement biblio.json:', err));