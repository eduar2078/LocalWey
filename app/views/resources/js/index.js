document.addEventListener("DOMContentLoaded", () => {

  /* ================================
     PANTALLA INICIO — REDIRECT
  ================================= */
  if (document.getElementById('logo-svg')) {
    setTimeout(() => { window.location.href = PATH_BASE + 'App/Home'; }, 3900);
    return;
  }

  /* ================================
     FULLPAGE SCROLL
  ================================= */
  const wrapper  = document.getElementById('fp-wrapper');
  const sections = [...document.querySelectorAll('.fp-section')];
  const dots     = [...document.querySelectorAll('.dot')];

  if (!wrapper || !sections.length) return;

  let locked    = false;
  let lockTimer = null;

  /* ── Dots: UNA sola fuente de verdad — el IntersectionObserver ──
     Nada más llama setActive. Ni el timer, ni scrollend, ni goTo.  */
  function setActive(idx) {
    dots.forEach((d, i) => d.classList.toggle('active', i === idx));
  }

  const sectionsObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting && e.intersectionRatio >= 0.6)
        setActive(+e.target.dataset.index);
    });
  }, { root: wrapper, threshold: 0.6 });

  sections.forEach(s => sectionsObserver.observe(s));

  /* ── Posición real del scroll ── */
  function getCurrentFromScroll() {
    return Math.round(wrapper.scrollTop / wrapper.clientHeight);
  }

  /* ── goTo: expuesta globalmente para los onclick del HTML ── */
  window.goTo = function(idx) {
    if (idx < 0 || idx >= sections.length) return;
    if (locked) return;

    const current = getCurrentFromScroll();
    if (idx === current) return;

    wrapper.scrollTo({ top: idx * wrapper.clientHeight, behavior: 'smooth' });

    locked = true;
    clearTimeout(lockTimer);
    lockTimer = setTimeout(() => { locked = false; }, 800);
    /* NO llamamos setActive aquí — el Observer lo hará cuando
       la sección destino cruce el 60% de visibilidad           */
  };

  function tryScroll(dir) {
    if (locked) return;
    const next = getCurrentFromScroll() + dir;
    if (next < 0 || next >= sections.length) return;
    window.goTo(next);
  }

  /* Dots */
  dots.forEach(d => d.addEventListener('click', () => window.goTo(+d.dataset.target)));

  /* Wheel */
  wrapper.addEventListener('wheel', (e) => {
    e.preventDefault();
    tryScroll(e.deltaY > 0 ? 1 : -1);
  }, { passive: false });

  /* Touch */
  let ty = 0;
  wrapper.addEventListener('touchstart', e => { ty = e.touches[0].clientY; }, { passive: true });
  wrapper.addEventListener('touchend',   e => {
    const diff = ty - e.changedTouches[0].clientY;
    if (Math.abs(diff) > 40) tryScroll(diff > 0 ? 1 : -1);
  }, { passive: true });

  /* Teclado */
  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowDown' || e.key === 'PageDown') { e.preventDefault(); tryScroll(1);  }
    if (e.key === 'ArrowUp'   || e.key === 'PageUp')   { e.preventDefault(); tryScroll(-1); }
  });

  /* ================================
     CARDS: SCROLL REVEAL
  ================================= */
  const cards = document.querySelectorAll('.category-card');

  const cardsObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        cardsObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  cards.forEach(card => cardsObserver.observe(card));

  /* ================================
     CARDS: HOVER + CLICK FEEDBACK
  ================================= */
  cards.forEach(card => {
    const icon = card.querySelector('i');

    card.addEventListener('mouseenter', () => {
      card.style.transform = 'translateY(-10px)';
      card.style.boxShadow = '0 20px 40px rgba(0,0,0,0.15)';
      if (icon) icon.style.transform = 'scale(1.15) rotate(3deg)';
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = 'translateY(0)';
      card.style.boxShadow = '0 4px 12px rgba(0,0,0,0.08)';
      if (icon) icon.style.transform = 'scale(1) rotate(0)';
    });
    card.addEventListener('mousedown', () => { card.style.transform = 'scale(0.97)'; });
    card.addEventListener('mouseup',   () => { card.style.transform = 'scale(1)'; });
  });

});