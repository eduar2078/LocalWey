<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localwey - Turismo en Bolívar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-light">

    <header class="bg-primary text-white shadow sticky-top">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            <div class="fw-bold fs-4 d-flex align-items-center gap-2">
                <i class="fas fa-map-signs"></i>
                <span id="header-title">Localwey</span>
            </div>
            <nav class="small">
               <a href="../content/Home.php" class="text-white text-decoration-none" id="breadcrumb-home">Inicio</a>
                <span class="mx-1">/</span>
                <span id="breadcrumb-current">Turismo en Bolívar</span>
            </nav>
        </div>
    </header>

    <main class="container my-4">
        <div class="row g-4">

            <!-- FILTROS -->
            <aside class="col-lg-4 col-xl-3">
                <div class="card shadow-sm sticky-top" style="top:90px">
                    <div class="card-header bg-primary text-white fw-semibold">
                        <i class="fas fa-filter me-2"></i> Filtros
                    </div>

                    <div class="card-body">

                        <div class="mb-4">
                            <h6 class="fw-bold mb-2">Tipo de lugar</h6>
                            <div id="filter-categories">
                                <div class="form-check"><input class="form-check-input" type="checkbox" checked> Miradores</div>
                                <div class="form-check"><input class="form-check-input" type="checkbox"> Cascadas</div>
                                <div class="form-check"><input class="form-check-input" type="checkbox"> Senderos</div>
                                <div class="form-check"><input class="form-check-input" type="checkbox"> Parques</div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold mb-2">Valoración</h6>
                            <div id="filter-rating">
                                <div class="form-check"><input class="form-check-input" type="radio" name="rating" checked> ★★★★★</div>
                                <div class="form-check"><input class="form-check-input" type="radio" name="rating"> ★★★★☆</div>
                                <div class="form-check"><input class="form-check-input" type="radio" name="rating"> ★★★☆☆</div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold mb-2">Ubicación</h6>
                            <select class="form-select" id="filter-location">
                                <option selected>Bolívar</option>
                                <option>Zona rural</option>
                                <option>Centro</option>
                                <option>Veredas</option>
                            </select>
                        </div>

                        <button class="btn btn-primary w-100 fw-semibold" id="apply-filters">
                            Aplicar filtros
                        </button>

                    </div>
                </div>
            </aside>

            <!-- LISTADO -->
            <section class="col-lg-8 col-xl-9">

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h4 class="fw-bold text-primary mb-1" id="list-title">
                            Turismo en Bolívar
                        </h4>
                        <p class="text-muted small mb-0" id="list-description">
                            Descubre los mejores lugares turísticos y naturales
                        </p>
                    </div>
                </div>

                <!-- CARD 1 -->
                <div class="card mb-3 border-0 entity-card">
                    <div class="row g-3">
                        <div class="col-md-3 p-2">
                            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470"
                                class="img-fluid rounded border"
                                alt="Lugar turístico"
                                id="entity-image">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body py-2">
                                <h6 class="fw-semibold mb-1" id="entity-name">Mirador El Alto</h6>
                                <div class="small text-muted mb-1" id="entity-meta">
                                    ★★★★★ · 4.9 · Mirador natural
                                </div>
                                <div class="small text-muted mb-2">
                                    <i class="fas fa-location-dot me-1"></i>
                                    <span id="entity-address">Bolívar, zona rural</span>
                                </div>
                                <button class="btn btn-primary btn-sm rounded-pill"
                                    data-bs-toggle="modal"
                                    data-bs-target="#entityModal"
                                    id="entity-view-btn">
                                    Ver lugar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- MODAL DETALLE -->
            <div class="modal fade" id="entityModal" tabindex="-1">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">

                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title fw-bold" id="modal-entity-name">
                                <i class="fas fa-map-marker-alt me-2"></i> Mirador El Alto
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body bg-light">

                            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470"
                                class="img-fluid rounded mb-4 w-100"
                                style="max-height:300px;object-fit:cover;"
                                id="modal-entity-image">

                            <div class="row g-4">

                                <div class="col-lg-8">
                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <div class="text-warning mb-1" id="modal-entity-meta">
                                                ★★★★★ · 4.9 · Mirador natural
                                            </div>
                                            <div class="text-muted small mb-2">
                                                <i class="fas fa-location-dot me-1"></i>
                                                <span id="modal-entity-address">Bolívar, zona rural</span>
                                            </div>
                                            <p class="text-muted" id="modal-entity-description">
                                                Lugar turístico ideal para caminatas, fotografía y disfrutar
                                                de paisajes naturales. Acceso gratuito y ambiente familiar.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <h6 class="fw-bold">
                                                <i class="fas fa-clock me-1"></i> Horarios
                                            </h6>
                                            <ul class="list-unstyled small text-muted" id="modal-entity-schedule">
                                                <li>Lunes a Domingo: 6:00 AM – 6:00 PM</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h6 class="fw-bold">
                                                <i class="fas fa-concierge-bell me-1"></i> Servicios
                                            </h6>
                                            <div id="modal-entity-services">
                                                <span class="badge bg-secondary">Senderismo</span>
                                                <span class="badge bg-secondary">Fotografía</span>
                                                <span class="badge bg-secondary">Guía local</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#entityContactModal">
                                Contactar
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- MODAL CONTACTO -->
            <div class="modal fade" id="entityContactModal" tabindex="-1">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">

                        <div class="modal-header bg-primary text-white">
                            <h6 class="modal-title fw-bold">Contactar</h6>
                            <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body text-center">
                            <a href="https://wa.me/573001234567"
                                target="_blank"
                                id="entity-whatsapp"
                                class="d-flex justify-content-center gap-2 text-success fw-semibold">
                                <i class="fab fa-whatsapp fa-2x"></i> WhatsApp
                            </a>

                            <div class="mt-3 text-primary fw-semibold">
                                <i class="fas fa-phone"></i>
                                <span id="entity-phone">+57 300 123 4567</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <footer class="bg-dark text-white mt-5">
                <div class="container py-4 text-center small">
                    © 2026 <span id="footer-brand">Localwey</span>
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        </div>
    </main>

</body>

</html>