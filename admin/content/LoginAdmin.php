<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login | Localwey Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Favicon principal -->
<link rel="icon" href="../../img/descarga.svg" type="image/svg+xml">

<!-- Fallback para navegadores antiguos -->
<link rel="icon" href="../../img/descarga.svg" sizes="32x32">

<!-- Icono para iPhone / iPad -->
<link rel="apple-touch-icon" href="../../img/descarga.svg">

</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-5 col-lg-4">

                <div class="card shadow-sm border-0 rounded-4">

                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <h4 class="fw-bold text-success d-flex justify-content-center align-items-center gap-2">

                                ● Localwey

                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="9" r="2"></circle>
                                    <path d="M9 1v2M9 15v2M1 9h2M15 9h2M3 3l1.5 1.5M13.5 13.5L15 15M3 15l1.5-1.5M13.5 4.5L15 3"></path>
                                </svg>

                            </h4>
                        </div>

                        <!-- FORM -->
                        <form action="login.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Correo electrónico</label>
                                <input class="form-control" placeholder="admin@localwey.com" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                            </div>

                            <!----- borra el <a> para poder hacer el backend-->
                            <a href="HomeAdmin.php" class="btn btn-primary"> Ingresar </a>

                            <!-- <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                            Ingresar
                            </button> -->
                    </div>

                    </form>

                </div>

            </div>

            <div class="text-center mt-3 text-muted small">
                © 2026 Localwey
            </div>

        </div>

    </div>

    </div>

</body>

</html>