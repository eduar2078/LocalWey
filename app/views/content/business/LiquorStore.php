<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localwey - Licorerías en Bolívar</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS propio -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-light">

    <!-- ================= HEADER ================= -->
    <header class="bg-primary text-white shadow sticky-top">
        <div class="container py-3 d-flex flex-wrap justify-content-between align-items-center gap-2">
            <div class="fw-bold fs-4 d-flex align-items-center gap-2">
                <i class="fas fa-wine-bottle"></i>
                <span id="header-title">Localwey</span>
            </div>
            <nav class="small">
                <a href="../content/Home.php" class="text-white text-decoration-none" id="breadcrumb-home">Inicio</a>
                <span class="mx-1">/</span>
                <span id="breadcrumb-current">Licorerías en Bolívar</span>
            </nav>
        </div>
    </header>

    <!-- ================= MAIN ================= -->
    <main class="container my-4">
        <div class="row g-4">

            <!-- ===== SIDEBAR FILTROS ===== -->
            <aside class="col-lg-4 col-xl-3">
                <div class="card shadow-sm sticky-top" style="top:90px">

                    <div class="card-header bg-primary text-white fw-semibold">
                        <i class="fas fa-filter me-2"></i>
                        Filtros
                    </div>

                    <div class="card-body">

                        <!-- Tipo de licor -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-2">Tipo de licor</h6>
                            <div id="filter-categories">
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">Whisky</label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Ron</label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Vino</label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Cerveza</label>
                                </div>
                            </div>
                        </div>

                        <!-- Valoración -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-2">Valoración</h6>
                            <div id="filter-rating">
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="rating" checked>
                                    <label class="form-check-label text-warning">★★★★★</label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="rating">
                                    <label class="form-check-label text-warning">★★★★☆</label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="rating">
                                    <label class="form-check-label text-warning">★★★☆☆</label>
                                </div>
                            </div>
                        </div>

                        <!-- Ubicación -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-2">Ubicación</h6>
                            <select class="form-select" id="filter-location">
                                <option selected>Bolívar</option>
                                <option>Farallones</option>
                                <option>San Gregorio</option>
                                <option>Ventorrillo</option>
                            </select>
                        </div>

                        <button class="btn btn-primary w-100 fw-semibold" id="apply-filters">
                            <i class="fas fa-check me-1"></i>
                            Aplicar filtros
                        </button>

                    </div>
                </div>
            </aside>

            <!-- ===== LISTADO ===== -->
            <section class="col-lg-8 col-xl-9">

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h4 class="fw-bold text-primary mb-1" id="list-title">
                            Licorerías en Bolívar
                        </h4>
                        <p class="text-muted small mb-0" id="list-description">
                            Las mejores licorerías con variedad y buenos precios
                        </p>
                    </div>
                </div>

                <!-- ===== CARD 1 ===== -->
                <div class="card mb-3 border-0 entity-card">
                    <div class="row g-3 align-items-start">
                        <div class="col-md-3">
                            <div class="p-2">
                                <img
                                    src="https://images.unsplash.com/photo-1604908554269-3a6dbe4b6f3a"
                                    class="img-fluid rounded border"
                                    alt="Licorería"
                                    id="entity-image">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body py-2">
                                <h6 class="fw-semibold mb-1" id="entity-name">Licores El Barril</h6>
                                <div class="small text-muted mb-1" id="entity-meta">
                                    ★★★★★ · 4.9 · Whisky & Ron
                                </div>
                                <div class="small text-muted mb-2">
                                    <i class="fas fa-location-dot me-1"></i>
                                    <span id="entity-address">Bolívar, Calle Principal #12</span>
                                </div>
                                <button
                                    class="btn btn-primary btn-sm rounded-pill px-4 fw-semibold d-inline-flex align-items-center gap-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#entityModal"
                                    id="entity-view-btn">
                                    <i class="fas fa-eye"></i>
                                    Ver licorería
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== CARD 2 ===== -->
                <div class="card mb-3 border-0 entity-card">
                    <div class="row g-3 align-items-start">
                        <div class="col-md-3">
                            <div class="p-2">
                                <img
                                    src="https://images.unsplash.com/photo-1589998059171-988d887df646"
                                    class="img-fluid rounded border"
                                    alt="Licorería"
                                    id="entity-image">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body py-2">
                                <h6 class="fw-semibold mb-1" id="entity-name">La Bodega Premium</h6>
                                <div class="small text-muted mb-1" id="entity-meta">
                                    ★★★★☆ · 4.6 · Vinos & Cremas
                                </div>
                                <div class="small text-muted mb-2">
                                    <i class="fas fa-location-dot me-1"></i>
                                    <span id="entity-address">Bolívar, Avenida Central #33</span>
                                </div>
                                <button
                                    class="btn btn-primary btn-sm rounded-pill px-4 fw-semibold d-inline-flex align-items-center gap-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#entityModal"
                                    id="entity-view-btn">
                                    <i class="fas fa-eye"></i>
                                    Ver licorería
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== CARD 3 ===== -->
                <div class="card mb-3 border-0 entity-card">
                    <div class="row g-3 align-items-start">
                        <div class="col-md-3">
                            <div class="p-2">
                                <img
                                    src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b"
                                    class="img-fluid rounded border"
                                    alt="Licorería"
                                    id="entity-image">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body py-2">
                                <h6 class="fw-semibold mb-1" id="entity-name">Licorera Central</h6>
                                <div class="small text-muted mb-1" id="entity-meta">
                                    ★★★★☆ · 4.4 · Cerveza & Licores nacionales
                                </div>
                                <div class="small text-muted mb-2">
                                    <i class="fas fa-location-dot me-1"></i>
                                    <span id="entity-address">Bolívar, Zona Comercial #8</span>
                                </div>
                                <button
                                    class="btn btn-primary btn-sm rounded-pill px-4 fw-semibold d-inline-flex align-items-center gap-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#entityModal"
                                    id="entity-view-btn">
                                    <i class="fas fa-eye"></i>
                                    Ver licorería
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- ================= MODAL VER LICORERÍA ================= -->
            <div class="modal fade" id="entityModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

                    <div class="modal-content">

                        <!-- Header -->
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title fw-bold" id="modal-entity-name">
                                <i class="fas fa-wine-glass-alt me-2"></i>
                                Licores El Barril
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Body -->
                        <div class="modal-body bg-light">

                            <img
                                src="https://images.unsplash.com/photo-1604908554269-3a6dbe4b6f3a"
                                class="img-fluid rounded mb-4 w-100"
                                style="max-height:300px; object-fit:cover;"
                                alt="Licorería"
                                id="modal-entity-image">

                            <div class="row g-4">

                                <div class="col-lg-8">

                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <div class="text-warning mb-1" id="modal-entity-meta">
                                                ★★★★★ · 4.9 · Whisky & Ron
                                            </div>
                                            <div class="text-muted small mb-2">
                                                <i class="fas fa-location-dot me-1"></i>
                                                <span id="modal-entity-address">
                                                    Bolívar, Calle Principal #12
                                                </span>
                                            </div>
                                            <p class="mb-0 text-muted" id="modal-entity-description">
                                                Licorería especializada en whiskies, rones y licores premium,
                                                con servicio a domicilio y asesoría personalizada.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Galería -->
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h6 class="fw-bold mb-3">Galería</h6>
                                            <div class="row g-2" id="modal-entity-gallery">
                                                <div class="col-4">
                                                    <img src="https://images.unsplash.com/photo-1589998059171-988d887df646" class="img-fluid rounded">
                                                </div>
                                                <div class="col-4">
                                                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b" class="img-fluid rounded">
                                                </div>
                                                <div class="col-4">
                                                    <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092" class="img-fluid rounded">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-4">

                                    <!-- Horarios -->
                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <h6 class="fw-bold mb-2">
                                                <i class="fas fa-clock me-1"></i> Horarios
                                            </h6>
                                            <ul class="list-unstyled small text-muted mb-0" id="modal-entity-schedule">
                                                <li>Lunes - Viernes: 10:00 AM – 10:00 PM</li>
                                                <li>Sábados: 10:00 AM – 11:00 PM</li>
                                                <li>Domingos: 11:00 AM – 8:00 PM</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Servicios -->
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h6 class="fw-bold mb-2">
                                                <i class="fas fa-concierge-bell me-1"></i> Servicios
                                            </h6>
                                            <div id="modal-entity-services">
                                                <span class="badge bg-secondary me-1 mb-1">Domicilio</span>
                                                <span class="badge bg-secondary me-1 mb-1">Pago con tarjeta</span>
                                                <span class="badge bg-secondary me-1 mb-1">Licores premium</span>
                                                <span class="badge bg-secondary me-1 mb-1">Atención nocturna</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Footer -->
                        <div class="modal-footer">
                            <button class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Cerrar
                            </button>
                            <button
                                class="btn btn-primary fw-semibold"
                                data-bs-toggle="modal"
                                data-bs-target="#entityContactModal">
                                <i class="fas fa-phone me-1"></i> Contactar
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ================= MODAL CONTACTO ================= -->
            <div class="modal fade" id="entityContactModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">

                    <div class="modal-content">

                        <div class="modal-header bg-primary text-white">
                            <h6 class="modal-title fw-bold">
                                <i class="fas fa-address-book me-2"></i>
                                Contactar
                            </h6>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body text-center">

                            <a
                                href="https://wa.me/573001234567"
                                target="_blank"
                                id="entity-whatsapp"
                                class="d-flex align-items-center justify-content-center gap-2 mb-3 text-decoration-none text-success fw-semibold">
                                <i class="fab fa-whatsapp fa-2x"></i>
                                WhatsApp
                            </a>

                            <div class="d-flex align-items-center justify-content-center gap-2 mb-3 text-primary fw-semibold">
                                <i class="fas fa-phone fa-lg"></i>
                                <span id="entity-phone">+57 300 123 4567</span>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-center gap-4">
                                <a href="#" id="entity-facebook" class="text-decoration-none text-primary">
                                    <i class="fab fa-facebook fa-2x"></i>
                                </a>
                                <a href="#" id="entity-instagram" class="text-decoration-none text-danger">
                                    <i class="fab fa-instagram fa-2x"></i>
                                </a>
                                <a href="#" id="entity-twitter" class="text-decoration-none text-info">
                                    <i class="fab fa-twitter fa-2x"></i>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- ================= FOOTER ================= -->
            <footer class="bg-dark text-white mt-5">
                <div class="container py-4 text-center small">
                    © 2026 <span id="footer-brand">Localwey</span>. Todos los derechos reservados.
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


        </div>
    </main>

</body>

</html>