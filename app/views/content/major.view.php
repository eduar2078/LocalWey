<!DOCTYPE html>
<html lang="es" class="fp-page">

<head>
    <meta charset="UTF-8">
    <title>Localwey - Conectando negocios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- FontAwesome Iconos -->
    <link rel="stylesheet" href="<?php echo PATH_FONTAWESOME; ?>css/all.min.css">

    <!-- Fuentes del proyecto -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- CSS global de la app -->
    <link rel="stylesheet" href="<?php echo PATH_CSS; ?>app.css">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-local sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Localwey</a>
            <a href="<?php echo PATH_BASE; ?>">
                <button type="button" class="btn btn-light"><i class="fa-solid fa-right-from-bracket"></i></button>
            </a>
        </div>
    </nav>

    <!-- DOTS -->
    <div id="nav-dots">
        <span class="dot active" data-target="0" title="Inicio"></span>
        <span class="dot" data-target="1" title="Promos"></span>
        <span class="dot" data-target="2" title="Negocios"></span>
        <span class="dot" data-target="3" title="Publicar"></span>
    </div>

    <div id="fp-wrapper">

        <!-- S1 — HERO -->
        <section class="fp-section hero-bg" data-index="0">
            <div class="container text-white py-5">
                <p class="fw-semibold mb-1 hero-location">
                    <i class="bi bi-geo-alt-fill me-1"></i>Estás en: <strong><?php echo $location[0]["f104_municipio"] . " - " . $location[0]["f105_departamento"]; ?></strong>
                </p>
                <h1 class="fw-bold mb-4 hero-title">
                    Descubre los mejores<br>negocios cerca de ti
                </h1>
                <div class="mb-5">
                    <a href="<?php echo PATH_BASE; ?>Business/Show/<?php echo $_GET["id"]; ?>" class="btn-explore">
                        <i class="bi bi-compass-fill" style="font-size:1.1rem;"></i>
                        Explorar negocios cerca de ti
                    </a>
                </div>

            </div>
            <button class="scroll-arrow scroll-arrow-light" onclick="goTo(1)">
                <i class="bi bi-chevron-down"></i>
            </button>
        </section>

        <!-- S2 — PROMOS -->
        <section class="fp-section bg-white" data-index="1">
            <div class="container py-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="sec-header-title mb-0">🔥 Promos Destacadas</h5>
                    <a href="#" class="text-primary-local fw-semibold text-decoration-none small">Ver todas →</a>
                </div>
                <div class="row g-3">

                    <div class="col-12 col-md-4">
                        <div class="card promo-card border-0 shadow-sm text-white">
                            <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?w=600&q=80" class="promo-img" alt="Burgers">
                            <div class="card-img-overlay d-flex flex-column justify-content-end overlay-dark">
                                <h4 class="fw-bold mb-1">50% Dto</h4>
                                <p class="mb-2">Burgers &amp; Beer</p>
                                <a href="#" class="btn btn-sm fw-semibold align-self-start rounded"
                                    style="background-color:#2DBE60;color:#fff;border:none;">Ver Promo</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card promo-card border-0 shadow-sm text-white">
                            <img src="https://images.unsplash.com/photo-1544145945-f90425340c7e?w=600&q=80" class="promo-img" alt="Cocteles">
                            <div class="card-img-overlay d-flex flex-column justify-content-end overlay-dark">
                                <h4 class="fw-bold mb-1">2x1</h4>
                                <p class="mb-2">Cócteles Tropicana</p>
                                <a href="#" class="btn btn-sm fw-semibold align-self-start rounded"
                                    style="background-color:#2DBE60;color:#fff;border:none;">Ver Promo</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card promo-card border-0 shadow-sm text-white">
                            <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&q=80" class="promo-img" alt="Ferreteria">
                            <div class="card-img-overlay d-flex flex-column justify-content-end overlay-dark">
                                <h4 class="fw-bold mb-1">10% OFF</h4>
                                <p class="mb-2">Ferretería El Tornillo</p>
                                <a href="#" class="btn btn-sm fw-semibold align-self-start rounded"
                                    style="background-color:#2DBE60;color:#fff;border:none;">Ver Promo</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="scroll-arrow scroll-arrow-dark" onclick="goTo(2)">
                <i class="bi bi-chevron-down"></i>
            </button>
        </section>

        <!-- S3 — NEGOCIOS POPULARES -->
        <section class="fp-section bg-light" data-index="2">
            <div class="container py-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="sec-header-title mb-0">Negocios Populares</h5>
                    <a href="#" class="text-primary-local fw-semibold text-decoration-none small">Ver todos →</a>
                </div>
                <div class="row g-3">

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?w=400&q=80" class="card-img-top" alt="Pizza">
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
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=400&q=80" class="card-img-top" alt="Green Bowl">
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
                            <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?w=400&q=80" class="card-img-top" alt="Studio Cuts">
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
                            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=400&q=80" class="card-img-top" alt="Tropicana">
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
            <button class="scroll-arrow scroll-arrow-dark" onclick="goTo(3)">
                <i class="bi bi-chevron-down"></i>
            </button>
        </section>

        <!-- S4 — CTA + FOOTER -->
        <section class="fp-section bg-light" data-index="3">
            <div class="container py-4">

                <div class="p-5 rounded text-white bg-primary-dark cta-wrap mb-4">
                    <h3 class="fw-bold" style="font-family:'Montserrat',sans-serif;">Haz crecer tu negocio con Localwey</h3>
                    <p class="mb-4 cta-sub">Miles de clientes buscan lo que tú ofreces.</p>
                    <a href="#" class="btn btn-lg rounded-pill px-4 fw-semibold"
                        style="background-color:#2DBE60;color:#fff;border:none;">
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
                        <a href="../admin/content/LoginAdmin.php" class="text-white text-decoration-none admin-link">Admin</a>
                    </div>
                </footer>

            </div>
        </section>

    </div><!-- /fp-wrapper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome Iconos -->
    <script src="<?php echo PATH_FONTAWESOME; ?>js/all.min.js"></script>
    <script src="<?php echo PATH_JS; ?>index.js"></script>


</body>

</html>