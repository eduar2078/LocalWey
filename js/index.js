document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".category-card");

  /* ================================
     ENTRADA SUAVE AL SCROLL (SENIOR)
  ================================= */
  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.2 }
  );

  cards.forEach(card => {
    observer.observe(card);
  });

  /* ================================
     HOVER PRO (ELEVACIÓN + ICONO)
  ================================= */
  cards.forEach(card => {
    const icon = card.querySelector("i");

    card.addEventListener("mouseenter", () => {
      card.style.transform = "translateY(-10px)";
      card.style.boxShadow = "0 20px 40px rgba(0,0,0,0.15)";

      if (icon) {
        icon.style.transform = "scale(1.15) rotate(3deg)";
      }
    });

    card.addEventListener("mouseleave", () => {
      card.style.transform = "translateY(0)";
      card.style.boxShadow = "0 4px 12px rgba(0,0,0,0.08)";

      if (icon) {
        icon.style.transform = "scale(1) rotate(0)";
      }
    });

    /* ================================
       CLICK FEEDBACK (TAP EFFECT)
    ================================= */
    card.addEventListener("mousedown", () => {
      card.style.transform = "scale(0.97)";
    });

    card.addEventListener("mouseup", () => {
      card.style.transform = "scale(1)";
    });
  });
});
