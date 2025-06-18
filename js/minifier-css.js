document.getElementById('minify-btn').addEventListener('click', () => {
  const input = document.getElementById('input-css').value.trim();

  if (!input) {
    alert('Veuillez coller votre code CSS avant de minifier.');
    return;
  }

  // Étapes de minification
  let minified = input
    .replace(/\/\*[\s\S]*?\*\//g, '')       // Supprimer les commentaires /* ... */
    .replace(/\s*([{}:;,])\s*/g, '$1')      // Supprimer les espaces autour des symboles
    .replace(/;\s*}/g, '}')                 // Supprimer les ; avant }
    .replace(/\n|\r/g, '')                  // Supprimer les retours à la ligne
    .replace(/\s+/g, ' ')                   // Réduire les espaces multiples
    .trim();

  // Affichage du résultat
  document.getElementById('output-css').value = minified;

  // Statistiques
  const beforeSize = input.length;
  const afterSize = minified.length;
  const saved = beforeSize - afterSize;
  const percent = beforeSize > 0 ? ((saved / beforeSize) * 100).toFixed(2) : '0';

  document.getElementById('result-stats').textContent =
    `Taille avant : ${beforeSize} caractères | Après : ${afterSize} caractères | Économisé : ${saved} caractères (${percent}%)`;

  // Affichage du graphique
  const ctx = document.getElementById('chart-stats').getContext('2d');
  if (window.myChart) {
    window.myChart.destroy(); // Détruire le précédent graphe s'il existe
  }
  window.myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Avant', 'Après'],
      datasets: [{
        label: 'Taille (caractères)',
        data: [beforeSize, afterSize],
        backgroundColor: ['#dc3545', '#28a745']
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: Math.ceil(beforeSize / 5)
          }
        }
      }
    }
  });
});

// Bouton Réinitialiser
document.getElementById('reset-btn').addEventListener('click', () => {
  document.getElementById('input-css').value = '';
  document.getElementById('output-css').value = '';
  document.getElementById('result-stats').textContent = '';
  if (window.myChart) {
    window.myChart.destroy();
  }
});

// Copier le CSS minifié
document.getElementById('copy-btn').addEventListener('click', () => {
  const output = document.getElementById('output-css').value;
  if (!output) {
    alert('Rien à copier, la zone de résultat est vide.');
    return;
  }

  if (navigator.clipboard?.writeText) {
    navigator.clipboard.writeText(output)
      .then(() => alert('CSS minifié copié dans le presse-papiers !'))
      .catch(err => alert('Erreur lors de la copie : ' + err));
  } else {
    const textArea = document.createElement('textarea');
    textArea.value = output;
    document.body.appendChild(textArea);
    textArea.select();
    try {
      document.execCommand('copy');
      alert('CSS minifié copié dans le presse-papiers !');
    } catch (err) {
      alert('Erreur lors de la copie : ' + err);
    }
    document.body.removeChild(textArea);
  }
});

// Télécharger le CSS minifié
document.getElementById('download-btn').addEventListener('click', () => {
  const output = document.getElementById('output-css').value;
  if (!output) {
    alert('Aucun CSS à télécharger.');
    return;
  }

  const blob = new Blob([output], { type: 'text/css' });
  const link = document.createElement('a');
  const date = new Date().toISOString().slice(0, 10);

  link.href = URL.createObjectURL(blob);
  link.download = `css-minifie-${date}.css`;

  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
});
console.log("👋 Hello dev ! Tu regardes sous le capot ? Bienvenue dans l’atelier.");