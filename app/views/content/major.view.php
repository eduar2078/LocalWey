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
    <!-- CARROUSEL -->
    <div class="carousel-wrapper">
        <!-- REDIRECCIÓN A BUSQUEDA DE NEGOCIOS -->
        <div class="hero-content">
            <div class="container text-white py-5">
                <p class="fw-semibold mb-1">
                    <i class="bi bi-geo-alt-fill me-1"></i>
                    Estás en
                    <strong>
                        <?php echo $location[0]["f104_municipio"] . " - " . $location[0]["f105_departamento"]; ?>
                    </strong>
                </p>
                <h1 class="fw-bold mb-4">Descubre los mejores<br>negocios cerca de ti</h1>
                <div class="mb-5">
                    <a href="<?php echo PATH_BASE; ?>Business/Show/<?php echo $_GET["id"]; ?>" class="btn-explore">
                        <i class="bi bi-compass-fill"></i>
                        Explorar negocios cerca de ti
                    </a>
                </div>
            </div>
        </div>
        <!-- IMAGENES -->
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo PATH_IMG; ?>FOTO 1.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo PATH_IMG; ?>FOTO 2.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo PATH_IMG; ?>FOTO 3.jpeg" class="d-block w-100">
                </div>
            </div>
        </div>
    </div>
    <!-- PESTAÑAS DE CONTENIDO -->
    <div class="container mt-3">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-history-tab" data-bs-toggle="pill" data-bs-target="#v-pills-history" type="button" role="tab" aria-controls="v-pills-history" aria-selected="true">Historia</button>
                <button class="nav-link" id="v-pills-contact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contact" type="button" role="tab" aria-controls="v-pills-contact" aria-selected="false">Contactanos</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab" tabindex="0">
                    <?php echo $location[0]["f104_historia"];?>
                </div>
                <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab" tabindex="0">...</div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome Iconos -->
    <script src="<?php echo PATH_FONTAWESOME; ?>js/all.min.js"></script>
</body>

</html>