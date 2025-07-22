
import 'bootstrap';
import './style.scss';
// import './404.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

// animation des titres

document.addEventListener('DOMContentLoaded', () => {
  const titles = document.querySelectorAll('h1, h2:not(.outil-title)');


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

console.log("👋 Hello dev ! Tu regardes sous le capot ? Bienvenue dans l’atelier.");

// retour en haut de l'écran ! 

  window.addEventListener("scroll", function() {
  const button = document.getElementById("backToTop");
  if (window.scrollY > 300) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
});

document.getElementById("backToTop").addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

console.log("👋 Hello dev ! Tu regardes sous le capot ? Bienvenue dans l’atelier.");

// code du footer

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('footer a').forEach(a => {
    a.addEventListener('mouseenter', () => {
      console.log('hover sur un lien footer');
    });
  });
});



