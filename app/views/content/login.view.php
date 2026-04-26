<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login | Localwey</title>
    <!-- Favicon principal -->
    <link rel="icon" href="../../img/descarga.svg" type="image/svg+xml">
    <!-- Librerias -->
    <link href="<?php echo PATH_BOOTSTRAP; ?>css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h4 class="fw-bold text-success d-flex justify-content-center align-items-center gap-2">● Localwey</h4>
                        </div>
                        <form id="formLogin">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="txtUserLogin" class="form-label">Usuario</label>
                                    <input type="text" name="txtUserLogin" id="txtUserLogin" class="form-control" required>
                                </div>
    
                                <div class="col-12 mb-4">
                                    <label for="txtPasswordLogin" class="form-label">Contraseña</label>
                                    <input type="password" name="txtPasswordLogin" id="txtPasswordLogin" class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary">Ingresar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="text-center mt-3 text-muted small">
                © 2026 Localwey
            </div>
        </div>
    </div>

    <script src="<?php echo PATH_BOOTSTRAP; ?>js/bootstrap.min.js"></script>
</body>
</html>