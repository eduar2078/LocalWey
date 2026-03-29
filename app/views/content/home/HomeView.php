<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Localwey - Conectando negocios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Fuentes del proyecto -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- CSS global de la app -->
  <link rel="stylesheet" href="<?php echo PATH_CSS; ?>style.css">

  <style>
    /* ── Full Page Scroll — solo aplica en esta página ── */
    /* overflow solo en esta página via .fp-page */
    html:has(body.fp-page),
    body.fp-page {
      overflow: hidden;
      height: 100%;
    }

    #fp-wrapper {
      height: calc(100vh - 60px);
      overflow-y: scroll;
      scroll-snap-type: y mandatory;
      scroll-behavior: smooth;
      scrollbar-width: none;
    }

    #fp-wrapper::-webkit-scrollbar {
      display: none;
    }

    .fp-section {
      scroll-snap-align: start;
      scroll-snap-stop: always;
      min-height: calc(100vh - 60px);
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
    }

    #nav-dots {
      position: fixed;
      right: 16px;
      top: 50%;
      transform: translateY(-50%);
      z-index: 1060;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .dot {
      display: block;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: rgba(30, 111, 217, .2);
      border: 2px solid rgba(30, 111, 217, .4);
      cursor: pointer;
      transition: background .25s, transform .25s, border-color .25s;
    }

    .dot.active {
      background: #1E6FD9;
      border-color: #1E6FD9;
      transform: scale(1.4);
    }

    .scroll-arrow {
      position: absolute;
      bottom: 18px;
      left: 50%;
      transform: translateX(-50%);
      border: none;
      background: none;
      font-size: 1.35rem;
      cursor: pointer;
      animation: fp-bounce 1.6s infinite;
      z-index: 10;
      padding: 0;
      line-height: 1;
    }

    @keyframes fp-bounce {

      0%,
      100% {
        transform: translateX(-50%) translateY(0);
      }

      50% {
        transform: translateX(-50%) translateY(7px);
      }
    }

    .hero-bg .input-group {
      max-width: 580px;
      border-radius: 50px;
      overflow: hidden;
      box-shadow: 0 8px 32px rgba(0, 0, 0, .28);
    }

    .hero-bg .form-control {
      border: none;
      padding: .85rem 1.25rem;
      border-radius: 0;
    }

    .hero-bg .form-control:focus {
      box-shadow: none;
    }

    .open-dot {
      display: inline-flex;
      align-items: center;
      gap: .3rem;
      font-size: .75rem;
      color: #2DBE60;
      font-weight: 600;
    }

    .open-dot::before {
      content: '';
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #2DBE60;
      animation: fp-pulse 2s infinite;
      flex-shrink: 0;
    }

    @keyframes fp-pulse {

      0%,
      100% {
        opacity: 1
      }

      50% {
        opacity: .3
      }
    }

    .img-zoom {
      transition: transform .4s ease;
    }

    .card:hover .img-zoom {
      transform: scale(1.06);
    }

    .promo-card:hover .img-zoom {
      transform: scale(1.05);
    }
  </style>
</head>

<body class="fp-page">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary-local sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Localwey</a>
      <div class="ms-auto d-flex gap-2">
        <button class="btn btn-light text-primary-local fw-semibold">Acceder</button>
      </div>
    </div>
  </nav>

  <!-- DOTS NAVEGACIÓN -->
  <div id="nav-dots">
    <span class="dot active" data-target="0" title="Inicio"></span>
    <span class="dot" data-target="1" title="Categorías"></span>
    <span class="dot" data-target="2" title="Promos"></span>
    <span class="dot" data-target="3" title="Negocios"></span>
    <span class="dot" data-target="4" title="Publicar"></span>
  </div>

  <!-- FULL PAGE WRAPPER -->
  <div id="fp-wrapper">

    <!-- ░░ S1 — HERO / SEARCH ░░ -->
    <section class="fp-section hero-bg" data-index="0">
      <div class="container text-white py-5">

        <p class="fw-semibold mb-1 hero-location">
          <i class="bi bi-geo-alt-fill me-1"></i>Estás en: <strong>Bolívar</strong>
        </p>

        <h1 class="fw-bold mb-4 hero-title">
          Descubre los mejores<br>negocios cerca de ti
        </h1>

        <div class="input-group input-group-lg mb-4">
          <input type="text" class="form-control" placeholder="¿Qué buscas hoy?">
          <button class="btn btn-success-local px-4 fw-bold">
            <i class="bi bi-search me-2"></i>Buscar
          </button>
        </div>

        <div class="d-flex gap-4 hero-stats">
          <div>
            <div class="fw-bold fs-5">+1,200</div>
            <small class="hero-stat-label">Negocios activos</small>
          </div>
          <div>
            <div class="fw-bold fs-5">18</div>
            <small class="hero-stat-label">Municipios</small>
          </div>
          <div>
            <div class="fw-bold fs-5">+4,500</div>
            <small class="hero-stat-label">Usuarios</small>
          </div>
        </div>

      </div>
      <button class="scroll-arrow scroll-arrow-light" onclick="goTo(1)">
        <i class="bi bi-chevron-down"></i>
      </button>
    </section>

    <!--  S2 — CATEGORÍAS -->
    <section class="fp-section bg-light" data-index="1">
      <div class="container py-4">

   

        <div class="row g-3 text-center">

          <div class="col-6 col-md">
            <a href="restaurant.php" class="text-decoration-none text-dark">
              <div class="bg-white p-4 rounded shadow-sm h-100 category-card">
                <i class="bi bi-shop fs-1 text-primary-local"></i>
                <p class="fw-semibold mt-2 mb-0">Negocios</p>
              </div>
            </a>
          </div>
          <!--
          <div class="col-6 col-md">
            <a href="restaurant.php" class="text-decoration-none text-dark">
              <div class="bg-white p-4 rounded shadow-sm h-100 category-card">
                <i class="bi bi-egg-fried fs-1 text-primary-local"></i>
                <p class="fw-semibold mt-2 mb-0">Restaurantes</p>
              </div>
            </a>
          </div>
 
          <div class="col-6 col-md">
            <a href="Barber.php" class="text-decoration-none text-dark">
              <div class="bg-white p-4 rounded shadow-sm h-100 category-card">
                <i class="bi bi-scissors fs-1 text-primary-local"></i>
                <p class="fw-semibold mt-2 mb-0">Barberías</p>
              </div>
            </a>
          </div>

          <div class="col-6 col-md">
            <a href="LiquorStore.php" class="text-decoration-none text-dark">
              <div class="bg-white p-4 rounded shadow-sm h-100 category-card">
                <i class="bi bi-cup-straw fs-1 text-primary-local"></i>
                <p class="fw-semibold mt-2 mb-0">Licorerías</p>
              </div>
            </a>
          </div>

          <div class="col-6 col-md">
            <a href="Tourims.php" class="text-decoration-none text-dark">
              <div class="bg-white p-4 rounded shadow-sm h-100 category-card">
                <i class="bi bi-airplane fs-1 text-primary-local"></i>
                <p class="fw-semibold mt-2 mb-0">Turismo</p>
              </div>
            </a>
          </div> -->

          <div class="col-6 col-md">
            <div class="bg-white p-4 rounded shadow-sm h-100 category-card">
              <i class="bi bi-grid-3x3-gap fs-1 text-primary-local"></i>
              <p class="fw-semibold mt-2 mb-0">Otros</p>
            </div>
          </div>

        </div>
      </div>
      <button class="scroll-arrow scroll-arrow-dark" onclick="goTo(2)">
        <i class="bi bi-chevron-down"></i>
      </button>
    </section>

    <!-- S3 — PROMOS DESTACADAS  -->
    <section class="fp-section bg-white" data-index="2">
      <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h5 class="sec-header-title mb-0">🔥 Promos Destacadas</h5>
          <a href="#" class="text-primary-local fw-semibold text-decoration-none small">Ver todas →</a>
        </div>

        <div class="row g-3">

          <div class="col-12 col-md-4">
            <div class="card promo-card border-0 shadow-sm text-white">
              <img src="https://images.unsplash.com/photo-1550547660-d9450f859349" class="promo-img">
              <div class="card-img-overlay d-flex flex-column justify-content-end overlay-dark">
                <h4 class="fw-bold mb-1">50% Dto</h4>
                <p class="mb-2">Burgers &amp; Beer</p>
                <a class="btn btn-success-local btn-sm align-self-start">Ver Promo</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="card promo-card border-0 shadow-sm text-white">
              <img src="https://images.unsplash.com/photo-1544145945-f90425340c7e" class="promo-img">
              <div class="card-img-overlay d-flex flex-column justify-content-end overlay-dark">
                <h4 class="fw-bold mb-1">2x1</h4>
                <p class="mb-2">Cócteles Tropicana</p>
                <a class="btn btn-success-local btn-sm align-self-start">Ver Promo</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="card promo-card border-0 shadow-sm text-white">
              <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952" class="promo-img">
              <div class="card-img-overlay d-flex flex-column justify-content-end overlay-dark">
                <h4 class="fw-bold mb-1">10% OFF</h4>
                <p class="mb-2">Ferretería El Tornillo</p>
                <a class="btn btn-success-local btn-sm align-self-start">Ver Promo</a>
              </div>
            </div>
          </div>

        </div>
      </div>
      <button class="scroll-arrow scroll-arrow-dark" onclick="goTo(3)">
        <i class="bi bi-chevron-down"></i>
      </button>
    </section>

    <!-- S4 — NEGOCIOS POPULARES  -->
    <section class="fp-section bg-light" data-index="3">
      <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h5 class="sec-header-title mb-0">Negocios Populares</h5>
          <a href="#" class="text-primary-local fw-semibold text-decoration-none small">Ver todos →</a>
        </div>

        <div class="row g-3">

          <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
              <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092" class="card-img-top">
              <div class="card-body">
                <h6 class="fw-bold">Pizzería La Toscana</h6>
                <small class="text-muted d-block mb-2">
                  <i class="bi bi-geo-alt text-success-local"></i> Envigado
                </small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="open-dot">Abierto</span>
                  <a href="#" class="text-primary-local fw-semibold text-decoration-none small">Ver más &gt;</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
              <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd" class="card-img-top">
              <div class="card-body">
                <h6 class="fw-bold">Green Bowl</h6>
                <small class="text-muted d-block mb-2">
                  <i class="bi bi-geo-alt text-success-local"></i> Bolívar Centro
                </small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="open-dot">Abierto</span>
                  <a href="#" class="text-primary-local fw-semibold text-decoration-none small">Ver más &gt;</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
              <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1" class="card-img-top">
              <div class="card-body">
                <h6 class="fw-bold">Studio Cuts</h6>
                <small class="text-muted d-block mb-2">
                  <i class="bi bi-geo-alt text-success-local"></i> El Poblado
                </small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="open-dot">Abierto</span>
                  <a href="#" class="text-primary-local fw-semibold text-decoration-none small">Ver más &gt;</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
              <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5" class="card-img-top">
              <div class="card-body">
                <h6 class="fw-bold">Tropicana Bar</h6>
                <small class="text-muted d-block mb-2">
                  <i class="bi bi-geo-alt text-success-local"></i> Guatapé
                </small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="open-dot">Abierto</span>
                  <a href="#" class="text-primary-local fw-semibold text-decoration-none small">Ver más &gt;</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <button class="scroll-arrow scroll-arrow-dark" onclick="goTo(4)">
        <i class="bi bi-chevron-down"></i>
      </button>
    </section>

    <!--  S5 — CTA + FOOTER -->
    <section class="fp-section bg-light" data-index="4">
      <div class="container py-4">

        <div class="p-5 rounded text-white bg-primary-dark cta-wrap mb-4">
          <h3 class="fw-bold">Haz crecer tu negocio con Localwey</h3>
          <p class="mb-4 cta-sub">Miles de clientes buscan lo que tú ofreces.</p>
          <a class="btn btn-success-local btn-lg rounded-pill px-4">
            <i class="bi bi-megaphone-fill me-2"></i>¡Publica tu aviso ahora!
          </a>
        </div>

        <footer class="bg-primary-local text-white text-center py-4 rounded-3">
          <p class="fw-bold mb-1 footer-brand">Localwey</p>
          <p class="mb-3 small footer-copy">© 2026 Localwey - Negocios que crecen contigo</p>
          <div class="d-flex justify-content-center gap-3 fs-5">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-whatsapp"></i>
          </div>
          <div class="mt-3">
            <a href="../admin/content/LoginAdmin.php"
              class="text-white text-decoration-none admin-link">Admin</a>
          </div>
        </footer>

      </div>
    </section>

  </div><!-- /fp-wrapper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo PATH_JS; ?>index.js"></script>
  

</body>

</html>