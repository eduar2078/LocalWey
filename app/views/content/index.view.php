<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localwey</title>

    <link rel="stylesheet" href="<?php echo PATH_CSS;?>fonts.css">
    <link rel="stylesheet" href="<?php echo PATH_BOOTSTRAP;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo PATH_CSS; ?>app.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="d-flex flex-column align-items-center gap-4">
            <svg id="logo-svg"
                width="320" height="205"
                viewBox="0 0 320 200"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">

                <defs>
                    <linearGradient id="gL" x1="0.4" y1="0" x2="0.4" y2="1">
                        <stop offset="0%" stop-color="#4ba3f0" />
                        <stop offset="55%" stop-color="#2e7fd4" />
                        <stop offset="100%" stop-color="#1a55b0" />
                    </linearGradient>

                    <linearGradient id="gLshad" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#1040a0" stop-opacity="0.45" />
                        <stop offset="100%" stop-color="#0a2a70" stop-opacity="0.70" />
                    </linearGradient>

                    <linearGradient id="gWb" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0%" stop-color="#156035" />
                        <stop offset="100%" stop-color="#1e8c44" />
                    </linearGradient>

                    <linearGradient id="gWf" x1="0" y1="1" x2="1" y2="0">
                        <stop offset="0%" stop-color="#22b053" />
                        <stop offset="100%" stop-color="#3dda6e" />
                    </linearGradient>

                    <linearGradient id="gWcross" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0%" stop-color="#0a4a20" stop-opacity="0.50" />
                        <stop offset="100%" stop-color="#0a4a20" stop-opacity="0.10" />
                    </linearGradient>
                </defs>

                <!-- CAPA 1 — L azul -->
                <path id="L-base"
                    d="M38,22 Q20,22 20,40 L20,158 Q20,176 38,176
             L106,176 Q124,176 124,158 L124,141
             Q124,123 106,123 L72,123 L72,40
             Q72,22 54,22 Z"
                    stroke="url(#gL)" stroke-width="2.5"
                    stroke-linejoin="round" fill="none" />

                <path id="L-fill"
                    d="M38,22 Q20,22 20,40 L20,158 Q20,176 38,176
             L106,176 Q124,176 124,158 L124,141
             Q124,123 106,123 L72,123 L72,40
             Q72,22 54,22 Z"
                    fill="url(#gL)" />

                <path id="L-shadow"
                    d="M72,130 L106,130 Q118,130 122,140
             L122,158 Q122,172 110,175 L72,176 Z"
                    fill="url(#gLshad)" />

                <path d="M38,22 Q20,22 20,40 L20,100"
                    stroke="#6ec0f8" stroke-width="2"
                    stroke-linecap="round" fill="none" opacity="0.4" />

                <!-- CAPA 2 — W chevron izquierdo (verde oscuro) -->
                <path id="W-back-stroke"
                    d="M100,35 L138,148 L172,62"
                    stroke="url(#gWb)" stroke-width="30"
                    stroke-linecap="round" stroke-linejoin="round" fill="none" />

                <path id="W-back-fill"
                    d="M100,35 L138,148 L172,62"
                    stroke="url(#gWb)" stroke-width="30"
                    stroke-linecap="round" stroke-linejoin="round" fill="none" />

                <!-- CAPA 3 — W chevron derecho + flecha (verde claro) -->
                <path id="W-front-stroke"
                    d="M168,65 L206,148 L268,22"
                    stroke="url(#gWf)" stroke-width="30"
                    stroke-linecap="round" stroke-linejoin="round" fill="none" />

                <path id="W-front-fill"
                    d="M168,65 L206,148 L268,22"
                    stroke="url(#gWf)" stroke-width="30"
                    stroke-linecap="round" stroke-linejoin="round" fill="none" />

                <path id="W-cross-shadow"
                    d="M160,68 L176,62 L185,90 L168,97 Z"
                    fill="url(#gWcross)" />

                <polygon id="arrow-head"
                    points="272,8  248,46  224,20"
                    fill="#3dda6e" />

                <polygon
                    points="272,8  248,46  224,20"
                    fill="#0a4a20" opacity="0.18"
                    transform="translate(3,4)" />

                <!-- CAPA 4 — Punto naranja -->
                <circle id="dot" cx="172" cy="93" r="15" fill="#f47c2b" />
                <circle cx="167" cy="87" r="4.5" fill="white" opacity="0.25" />

            </svg>
            <!-- Nombre de marca -->
            <h1 id="brand-name"
                class="fw-bold m-0"
                style="font-size:clamp(26px,5vw,44px); color:#37404a; letter-spacing:-0.5px;">
                Localwey
            </h1>
            <!-- Barra de progreso — ID propio para no heredar .progress-bar global -->
            <div id="progress-wrap">
                <div id="lw-bar-track">
                    <div id="lw-bar-fill"></div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        const PATH_BASE = '<?php echo PATH_BASE; ?>'
    </script>
    <script src="<?php echo PATH_BOOTSTRAP;?>js/bootstrap.min.js"></script>
    <script src="<?php echo PATH_JS; ?>index.js"></script>
</body>
</html>