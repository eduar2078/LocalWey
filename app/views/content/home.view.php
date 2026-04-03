<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localwey</title>
    <link rel="stylesheet" href="<?php echo PATH_CSS; ?>home.css">
    <link rel="stylesheet" href="<?php echo PATH_FONTAWESOME; ?>css/all.min.css">
    <link rel="stylesheet" href="<?php echo PATH_SWIPER; ?>swiper-bundle.min.css">
</head>

<body>
    <div class="container-home swiper">
        <div class="card-wrapper-home">
            <ul class="card-list-home swiper-wrapper">
                <?php
                    foreach ($municipalitysEnableds as $key => $value) {
                ?>
                <li class="card-item-home swiper-slide">
                    <a href="<?php echo PATH_BASE; ?>App/Major/<?php echo $value["f104_id"]; ?>" class="card-link-home">
                        <img src="<?php echo PATH_IMG . $value["f104_imagen_portada"]; ?>" alt="Imagen regional" class="card-image-home">
                        <p class="badge-home"><?php echo $value["f104_municipio"] . " - " . $value["f105_departamento"]; ?></p>
                        <h2 class="card-title-home"><?php echo $value["f104_descripcion"]; ?></h2>
                        <button type="button" class="card-button-home">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </a>
                </li>
                <?php
                    }
                ?>
                
                <li class="card-item-home swiper-slide" style="opacity: 0;">
                    <a href="#" class="card-link-home">
                        <img src="" alt="Imagen regional" class="card-image-home">
                        <p class="badge-home">Developer</p>
                        <h2 class="card-title-home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quisquam quo eaque repudiandae consequuntur maiores deserunt voluptatem similique voluptates, ratione facilis pariatur quod, accusamus quibusdam, excepturi at deleniti sequi perspiciatis.</h2>
                        <button type="button" class="card-button-home">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </a>
                </li>
            </ul>

            <div class="swiper-pagination"></div>
            <div class="swiper-slide-button swiper-button-prev"></div>
            <div class="swiper-slide-button swiper-button-next"></div>
        </div>
    </div>

    <script src="<?php echo PATH_SWIPER; ?>swiper-bundle.min.js"></script>
    <script src="<?php echo PATH_JS; ?>home.js"></script>
</body>

</html>