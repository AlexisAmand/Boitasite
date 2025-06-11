document.addEventListener('DOMContentLoaded', () => {
  const titles = document.querySelectorAll('h1', 'h2');

  // Vérification de compatibilité
  if (!('IntersectionObserver' in window)) {
    // Fallback pour les vieux navigateurs
    titles.forEach(title => title.classList.add('visible'));
    return;
  }

  // Observer avec un seuil très bas + marge pour déclencher plus tôt
  const observerOptions = {
    threshold: 0.01,
    rootMargin: '0px 0px -20% 0px'
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  titles.forEach(title => observer.observe(title));
});
