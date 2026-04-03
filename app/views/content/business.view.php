<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localwey - Negocios en Ciudad Bolívar</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS propio -->
    <link rel="stylesheet" href="<?php echo PATH_CSS; ?>app.css">

    <style>
        /* Zoom imagen card en hover */
        .entity-card .img-col {
            overflow: hidden;
        }

        .entity-card .img-col img {
            transition: transform .4s ease;
        }

        .entity-card:hover .img-col img {
            transform: scale(1.05);
        }

        /* Sidebar sticky bajo navbar */
        .sidebar-sticky {
            position: sticky;
            top: 76px;
        }
    </style>
</head>

<body class="bg-light">
    <!-- ═══════════════ NAVBAR ═══════════════ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm" style="height:60px;z-index:1050">
        <div class="container">
            <!-- Botón retroceder (reemplaza "Acceder") -->
            <a href="<?php echo PATH_BASE;?>App/Major/<?php echo $_GET["id"]; ?>"
                class="btn btn-light fw-semibold rounded-pill px-3 d-flex align-items-center gap-2"
                style="font-size:.9rem;">
                <i class="bi bi-arrow-left fs-5"></i>
                <span class="d-none d-sm-inline">Volver</span>
            </a>
            <a class="navbar-brand fw-bold fs-4 mx-auto position-absolute start-50 translate-middle-x" href="../content/Home.php">
                <i class="bi bi-geo-alt-fill me-1"></i>
                <span id="header-title">Localwey</span>
            </a>
        </div>
    </nav>
    <!-- ================= MAIN ================= -->
    <main class="container my-4">
        <div class="row g-4">

            <!-- ===== SIDEBAR FILTROS ===== -->
            <aside class="col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 sidebar-sticky">

                    <div class="card-header bg-primary text-white fw-semibold rounded-top-4 border-0 py-3 px-4">
                        <i class="bi bi-sliders me-2"></i>Filtros
                    </div>

                    <div class="card-body p-4">

                        <!-- Tipo de negocio -->
                        <h6 class="fw-bold mb-3 text-primary small text-uppercase ls-1">
                            <i class="bi bi-grid me-1"></i>Tipo de negocio
                        </h6>
                        <div id="filter-categories" class="d-flex flex-column gap-2 mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cat-rest" checked>
                                <label class="form-check-label small fw-semibold" for="cat-rest">
                                    <i class="bi bi-egg-fried me-1 text-primary"></i>Restaurantes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cat-bar">
                                <label class="form-check-label small fw-semibold" for="cat-bar">
                                    <i class="bi bi-cup-straw me-1 text-primary"></i>Bares
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cat-barber">
                                <label class="form-check-label small fw-semibold" for="cat-barber">
                                    <i class="bi bi-scissors me-1 text-primary"></i>Barberías
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cat-shop">
                                <label class="form-check-label small fw-semibold" for="cat-shop">
                                    <i class="bi bi-shop me-1 text-primary"></i>Tiendas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cat-tour">
                                <label class="form-check-label small fw-semibold" for="cat-tour">
                                    <i class="bi bi-airplane me-1 text-primary"></i>Turismo
                                </label>
                            </div>
                        </div>

                        <hr class="my-3 opacity-10">

                        <!-- Valoración -->
                        <h6 class="fw-bold mb-3 text-primary small text-uppercase">
                            <i class="bi bi-star me-1"></i>Valoración
                        </h6>
                        <div id="filter-rating" class="d-flex flex-column gap-2 mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="r5" checked>
                                <label class="form-check-label small text-warning fw-semibold" for="r5">
                                    ★★★★★ <span class="text-muted fw-normal">(5.0)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="r4">
                                <label class="form-check-label small text-warning fw-semibold" for="r4">
                                    ★★★★☆ <span class="text-muted fw-normal">(4.0+)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="r3">
                                <label class="form-check-label small text-warning fw-semibold" for="r3">
                                    ★★★☆☆ <span class="text-muted fw-normal">(3.0+)</span>
                                </label>
                            </div>
                        </div>

                        <hr class="my-3 opacity-10">

                        <!-- Ubicación -->
                        <h6 class="fw-bold mb-3 text-primary small text-uppercase">
                            <i class="bi bi-geo-alt me-1"></i>Ubicación
                        </h6>
                        <select class="form-select form-select-sm rounded-3 mb-4" id="filter-location">
                            <option selected>Bolívar</option>
                            <option>Farallones</option>
                            <option>San Gregorio</option>
                            <option>Ventorrillo</option>
                        </select>

                        <button class="btn btn-primary w-100 fw-semibold rounded-pill" id="apply-filters">
                            <i class="bi bi-check2 me-1"></i>Aplicar filtros
                        </button>

                    </div>
                </div>
            </aside>

            <!-- ===== LISTADO ===== -->
            <section class="col-lg-9">

                <!-- Header listado -->
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-body d-flex flex-wrap justify-content-between align-items-center gap-3 p-4">
                        <div>
                            <h4 class="fw-bold text-primary mb-1" id="list-title">Negocios en Bolívar</h4>
                            <p class="text-muted small mb-0" id="list-description">
                                <i class="bi bi-building me-1"></i>Mostrando <strong>3</strong> negocios disponibles
                            </p>
                        </div>
                        <div class="input-group shadow-sm rounded-pill overflow-hidden" style="max-width:260px">
                            <input type="text" class="form-control border-0 bg-white" placeholder="Buscar negocio…">
                            <button class="btn btn-primary px-3"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
                <?php
                    foreach ($business as $key => $value) {
                ?>
                    <div class="card border-0 shadow-sm rounded-4 mb-3 entity-card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-3 img-col" style="min-height:160px">
                                <img
                                    src="<?php echo PATH_IMG; ?>business/<?php echo $value["f200_imagen_portada"]; ?>"
                                    class="w-100 h-100 object-fit-cover"
                                    alt="<?php echo $value["f200_nombre"]; ?>"
                                    id="entity-image"
                                    style="min-height:160px">

                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-2">
                                        <h6 class="fw-bold fs-5 mb-0" id="entity-name"><?php echo $value["f200_nombre"]; ?></h6>
                                        <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 small fw-semibold">Parrilla</span>
                                    </div>
                                    <div class="text-warning small mb-1" id="entity-meta">★★★★☆ <span class="text-muted fw-normal">· 4.3 · 44 reseñas</span></div>
                                    <div class="text-muted small mb-3">
                                        <i class="bi bi-geo-alt-fill me-1 text-primary"></i>
                                        <span id="entity-address"><?php echo $value["f200_direccion"]; ?></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill small fw-semibold">
                                                <i class="bi bi-circle-fill me-1" style="font-size:.45rem;vertical-align:middle"></i>Cerrado
                                            </span>
                                            <span class="badge bg-light text-secondary rounded-pill small">Domicilio</span>
                                        </div>
                                        <button
                                            class="btn btn-primary btn-sm rounded-pill px-4 fw-semibold"
                                            id="entity-view-btn" onclick="getInfoxBusiness(<?php echo $value['f200_id']; ?>)">
                                            <i class="fas fa-eye"></i>
                                            Ver negocio
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </section>
        </div>
    </main>

    <!-- ═══════════════ FOOTER ═══════════════ -->
    <footer class="bg-primary text-white mt-5">
        <div class="container py-4 text-center small opacity-75">
            © 2026 <span id="footer-brand">Localwey</span>. Todos los derechos reservados.
        </div>
    </footer>
    <!-- ═══════════════ MODAL VER NEGOCIO ═══════════════
        Fuera del main para evitar problemas de z-index y scroll
    ════════════════════════════════════════════════════ -->
    <div class="modal fade" id="entityModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

            <div class="modal-content rounded-4 border-0 shadow-lg overflow-hidden">

                <!-- Header -->
                <div class="modal-header bg-primary text-white border-0 px-4">
                    <h5 class="modal-title fw-bold" id="modal-entity-name">
                        <i class="bi bi-shop me-2"></i>
                        <span id="name-business-entity-modal"></span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body bg-light p-4">

                    <img
                        src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38"
                        class="w-100 rounded-3 mb-4 object-fit-cover"
                        style=max-height:280px;"
                        alt="Imagen del negocio"
                        id="modal-entity-image">

                    <div class="row g-4">

                        <div class="col-lg-8">

                            <div class="card border-0 shadow-sm rounded-4 mb-4">
                                <div class="card-body p-4">
                                    <div class="text-warning mb-1 fw-semibold" id="modal-entity-meta">
                                        ★★★★☆ · 4.2 · <span id="span-entity-type-business"></span>
                                    </div>
                                    <div class="text-muted small mb-3">
                                        <i class="bi bi-geo-alt-fill me-1 text-primary"></i>
                                        <span id="modal-entity-address">
                                            Ciudad Bolívar, <span id="span-entity-address"></span>
                                        </span>
                                    </div>
                                    <p class="mb-0 text-muted small" id="modal-entity-description"></p>
                                </div>
                            </div>

                            <!-- Galería -->
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body p-4">
                                    <h6 class="fw-bold mb-3"><i class="bi bi-images me-1 text-primary"></i>Galería</h6>
                                    <div class="row g-2" id="modal-entity-gallery">
                                        <div class="col-4">
                                            <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=400" class="img-fluid rounded-3 w-100 object-fit-cover" style="height:100px">
                                        </div>
                                        <div class="col-4">
                                            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=400" class="img-fluid rounded-3 w-100 object-fit-cover" style="height:100px">
                                        </div>
                                        <div class="col-4">
                                            <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=400" class="img-fluid rounded-3 w-100 object-fit-cover" style="height:100px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="col-lg-4">
                            <!-- Horarios -->
                            <div class="card border-0 shadow-sm rounded-4 mb-4">
                                <div class="card-body p-4">
                                    <h6 class="fw-bold mb-3">
                                        <i class="bi bi-clock me-1 text-primary"></i> Horarios
                                    </h6>
                                    <ul class="list-unstyled small text-muted mb-0" id="modal-entity-schedule">
                                        <li class="mb-1"><i class="bi bi-dash me-1"></i>Lunes - Viernes: 12:00 PM – 10:00 PM</li>
                                        <li class="mb-1"><i class="bi bi-dash me-1"></i>Sábados: 12:00 PM – 11:00 PM</li>
                                        <li><i class="bi bi-dash me-1"></i>Domingos: 1:00 PM – 9:00 PM</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Servicios -->
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body p-4">
                                    <h6 class="fw-bold mb-3">
                                        <i class="bi bi-stars me-1 text-primary"></i> Servicios
                                    </h6>
                                    <div id="modal-entity-services" class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3">Domicilio</span>
                                        <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3">WiFi</span>
                                        <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3">Tarjeta</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer border-0 bg-light px-4 pb-4">
                    <button class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Cerrar</button>
                    <!-- Contactar: cierra este modal y abre el de contacto via JS -->
                    <button class="btn btn-primary fw-semibold rounded-pill px-4" id="btn-abrir-contacto">
                        <i class="bi bi-telephone me-1"></i>Contactar
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- ================= MODAL CONTACTO ================= -->
    <div class="modal fade" id="entityContactModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">

            <div class="modal-content rounded-4 border-0 shadow-lg overflow-hidden">

                <!-- Header -->
                <div class="modal-header bg-primary text-white border-0 px-4">
                    <h6 class="modal-title fw-bold">
                        <i class="bi bi-person-lines-fill me-2"></i>Contactar
                    </h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <!-- Body -->
                <div class="modal-body text-center p-4">

                    <!-- WhatsApp -->
                    <a href="https://wa.me/573001234567" target="_blank" id="entity-whatsapp"
                        class="d-flex align-items-center justify-content-center gap-2 mb-3 text-decoration-none fw-semibold text-success fs-5">
                        <i class="bi bi-whatsapp fs-3"></i>WhatsApp
                    </a>

                    <!-- Teléfono -->
                    <div class="d-flex align-items-center justify-content-center gap-2 mb-3 text-primary fw-semibold">
                        <i class="bi bi-telephone-fill fs-5"></i>
                        <span id="entity-phone">+57 300 123 4567</span>
                    </div>

                    <hr class="opacity-10">

                    <!-- Redes sociales -->
                    <div class="d-flex justify-content-center gap-4 mt-2">
                        <a href="#" id="entity-facebook" class="text-decoration-none text-primary fs-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" id="entity-instagram" class="text-decoration-none fs-3" style="color:#e1306c"><i class="bi bi-instagram"></i></a>
                        <a href="#" id="entity-twitter" class="text-decoration-none text-info fs-3"><i class="bi bi-twitter-x"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo PATH_JS; ?>jquery-4.0.0.min.js"></script>
    <script>
        // Abre modal contacto correctamente:
        // 1. Cierra el modal del negocio
        // 2. Cuando termina de cerrarse, abre el de contacto
        const modalNegocio = bootstrap.Modal.getOrCreateInstance(document.getElementById('entityModal'));
        const modalContacto = bootstrap.Modal.getOrCreateInstance(document.getElementById('entityContactModal'));

        document.getElementById('btn-abrir-contacto').addEventListener('click', function() {
            modalNegocio.hide();
            document.getElementById('entityModal').addEventListener('hidden.bs.modal', function abrirContacto() {
                modalContacto.show();
                // Remover listener para que no se acumule
                document.getElementById('entityModal').removeEventListener('hidden.bs.modal', abrirContacto);
            });
        });
        // Variables globales
        const PATH_BASE = "<?php echo PATH_BASE; ?>"
        const PATH_IMG = "<?php echo PATH_IMG; ?>";
    </script>
    <script src="<?php echo PATH_JS; ?>business.js"></script>
</body>
</html>