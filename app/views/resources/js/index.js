document.addEventListener("DOMContentLoaded", () => {
  /* ================================
     ANIMACIÓN DE CARGA DE PLATAFORMA WEB
  ================================= */
  if (document.getElementById('logo-svg')) {
    setTimeout(() => { window.location.href = PATH_BASE + 'App/Home'; }, 3900);
    return;
  }
});