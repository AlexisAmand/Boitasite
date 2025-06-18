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