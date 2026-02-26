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

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary-local">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Localwey</a>
      <div class="ms-auto d-flex gap-2">
        <button class="btn btn-light text-primary-local fw-semibold">Acceder</button>
      </div>
    </div>
  </nav>

  <!-- SEARCH -->
  <section class="hero-bg py-4">
    <div class="container text-white">
      <p class="fw-semibold mb-2">Estás en: <strong>Bolívar</strong></p>
      <div class="input-group input-group-lg">
        <input type="text" class="form-control" placeholder="¿Qué buscas hoy?">
        <button class="btn btn-success-local px-4">Buscar</button>
      </div>
    </div>
  </section>

  <!-- CATEGORIES -->
  <section class="container py-4">
    <div class="row g-3 text-center">

      <div class="col-6 col-md">
        <a href="restaurant.php" class="text-decoration-none text-dark">
          <div class="bg-white p-4 rounded shadow-sm h-100 category-card">
            <i class="bi bi-shop fs-1 text-primary-local"></i>
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
      </div>

      <div class="col-6 col-md">

        <div class="bg-white p-4 rounded shadow-sm h-100 category-card">
          <i class="bi bi-grid-3x3-gap fs-1 text-primary-local"></i>
          <p class="fw-semibold mt-2 mb-0">Otros</p>
        </div>
      </div>

    </div>
  </section>

  <!-- PROMOS -->
  <section class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h5 class="fw-bold text-primary-local mb-0">Promos Destacadas</h5>
      <!-- <small class="text-muted">Termina en: 02:15:23</small> -->
    </div>

    <div class="row g-3">

      <div class="col-12 col-md-4">
        <div class="card promo-card border-0 shadow-sm text-white">
          <img src="https://images.unsplash.com/photo-1550547660-d9450f859349" class="promo-img">
          <div class="card-img-overlay d-flex flex-column justify-content-end overlay-dark">
            <h4 class="fw-bold mb-1">50% Dto</h4>
            <p class="mb-2">Burgers & Beer</p>
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
  </section>

  <!-- NEGOCIOS -->
  <section class="container py-4">
    <h5 class="fw-bold mb-3">Negocios Populares</h5>

    <div class="row g-3">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 shadow-sm h-100">
          <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092" class="card-img-top">
          <div class="card-body">
            <h6 class="fw-bold">Pizzería La Toscana</h6>
            <small class="text-muted">
              <i class="bi bi-geo-alt text-success-local"></i> Envigado
            </small>
            <div class="text-end">
              <a href="#" class="text-primary-local fw-semibold">Ver más &gt;</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- CTA -->
  <section class="container my-5">
    <div class="p-5 rounded text-white bg-primary-dark">
      <h3 class="fw-bold">Haz crecer tu negocio con Localwey</h3>
      <p>Anúncialo en Localwey</p>
      <a class="btn btn-success-local btn-lg rounded-pill px-4">
        ¡Publica tu aviso ahora!
      </a>
    </div>
  </section>

  <a href="../admin/content/HomeAdmin.php" class="text-decoration-none text-dark">Admin</a>

  <!-- FOOTER -->
  <footer class="bg-primary-local text-white text-center py-4">
    <p class="mb-2">© 2024 Localwey - Negocios que crecen contigo</p>
    <div class="d-flex justify-content-center gap-3 fs-5">
      <i class="bi bi-facebook"></i>
      <i class="bi bi-instagram"></i>
      <i class="bi bi-twitter"></i>
      <i class="bi bi-whatsapp"></i>
    </div>
  </footer>

</body>
<style>
  #preloader {
    display: none !important;
  }
</style>

<script src="../js/index.js"></script>

</html>