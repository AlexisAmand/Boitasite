const colors = ['postit-yellow', 'postit-pink', 'postit-green', 'postit-blue'];

document.querySelectorAll('.card-body-faq').forEach(el => {
  // enlever la rotation initiale pour que hover remette à 0deg
  el.style.transform = 'rotate(' + ((Math.random() * 10) - 5) + 'deg)';

  // ajouter une couleur aléatoire
  const color = colors[Math.floor(Math.random() * colors.length)];
  el.classList.add(color);
});
