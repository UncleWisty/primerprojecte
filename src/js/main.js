// =============================
// ReformaPlus - main.js
// =============================

// --- Scroll suave para enlaces internos ---
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// --- Botón "Volver arriba" ---
const backToTop = document.createElement('button');
backToTop.innerText = "↑";
backToTop.id = "backToTop";
document.body.appendChild(backToTop);

backToTop.style.position = "fixed";
backToTop.style.bottom = "30px";
backToTop.style.right = "30px";
backToTop.style.padding = "10px 15px";
backToTop.style.background = "#1e3a8a";
backToTop.style.color = "white";
backToTop.style.border = "none";
backToTop.style.borderRadius = "6px";
backToTop.style.cursor = "pointer";
backToTop.style.display = "none";
backToTop.style.fontSize = "20px";
backToTop.style.boxShadow = "0 2px 6px rgba(0,0,0,0.2)";
backToTop.style.transition = "opacity 0.3s ease";

window.addEventListener("scroll", () => {
  if (window.scrollY > 400) {
    backToTop.style.display = "block";
    backToTop.style.opacity = "1";
  } else {
    backToTop.style.opacity = "0";
    setTimeout(() => {
      if (window.scrollY < 400) backToTop.style.display = "none";
    }, 300);
  }
});

backToTop.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// --- Animaciones de aparición (fade-in) ---
const fadeElements = document.querySelectorAll("section, .servicio");

const fadeObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = 1;
      entry.target.style.transform = "translateY(0)";
    }
  });
}, { threshold: 0.2 });

fadeElements.forEach(el => {
  el.style.opacity = 0;
  el.style.transform = "translateY(40px)";
  el.style.transition = "all 0.8s ease";
  fadeObserver.observe(el);
});
