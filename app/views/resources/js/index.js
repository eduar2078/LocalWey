document.addEventListener("DOMContentLoaded", () => {

  /* ================================
     FULLPAGE SCROLL (CÓDIGO 2)
  ================================= */
  const wrapper = document.getElementById('fp-wrapper');
  const sections = [...document.querySelectorAll('.fp-section')];
  const dots = [...document.querySelectorAll('.dot')];
  let current = 0;
  let locked = false;

  function goTo(idx) {
    if (idx < 0 || idx >= sections.length) return;
    sections[idx].scrollIntoView({ behavior: 'smooth' });
  }

  function setActive(idx) {
    current = idx;
    dots.forEach((d, i) => d.classList.toggle('active', i === idx));
  }

  dots.forEach(d => d.addEventListener('click', () => goTo(+d.dataset.target)));

  // ← Renombrado para evitar colisión con sectionObserver
  const sectionsObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting && e.intersectionRatio >= 0.5)
        setActive(+e.target.dataset.index);
    });
  }, {
    root: wrapper,
    threshold: 0.5
  });

  sections.forEach(s => sectionsObserver.observe(s));

  if (wrapper) {
    wrapper.addEventListener('wheel', (e) => {
      e.preventDefault();
      if (locked) return;
      locked = true;
      goTo(current + (e.deltaY > 0 ? 1 : -1));
      setTimeout(() => locked = false, 900);
    }, { passive: false });

    let ty = 0;
    wrapper.addEventListener('touchstart', e => {
      ty = e.touches[0].clientY;
    }, { passive: true });

    wrapper.addEventListener('touchend', e => {
      const diff = ty - e.changedTouches[0].clientY;
      if (Math.abs(diff) > 40) goTo(current + (diff > 0 ? 1 : -1));
    }, { passive: true });
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowDown' || e.key === 'PageDown') {
      e.preventDefault();
      goTo(current + 1);
    }
    if (e.key === 'ArrowUp' || e.key === 'PageUp') {
      e.preventDefault();
      goTo(current - 1);
    }
  });

  /* ================================
     CARDS: SCROLL REVEAL (CÓDIGO 1)
  ================================= */
  const cards = document.querySelectorAll(".category-card");

  // ← Renombrado para evitar colisión con sectionsObserver
  const cardsObserver = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
          cardsObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.2 }
  );

  cards.forEach(card => cardsObserver.observe(card));

  /* ================================
     CARDS: HOVER + CLICK FEEDBACK
  ================================= */
  cards.forEach(card => {
    const icon = card.querySelector("i");

    card.addEventListener("mouseenter", () => {
      card.style.transform = "translateY(-10px)";
      card.style.boxShadow = "0 20px 40px rgba(0,0,0,0.15)";
      if (icon) icon.style.transform = "scale(1.15) rotate(3deg)";
    });

    card.addEventListener("mouseleave", () => {
      card.style.transform = "translateY(0)";
      card.style.boxShadow = "0 4px 12px rgba(0,0,0,0.08)";
      if (icon) icon.style.transform = "scale(1) rotate(0)";
    });

    card.addEventListener("mousedown", () => {
      card.style.transform = "scale(0.97)";
    });

    card.addEventListener("mouseup", () => {
      card.style.transform = "scale(1)";
    });
  });

});