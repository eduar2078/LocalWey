<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Administración | Localwey</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .panel-wrapper {
            background: white;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .action-card {
            cursor: pointer;
            transition: all .25s;
        }

        .action-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.07);
        }

        .icon-box {
            width: 50px;
            height: 50px;
        }

        .bg-soft-blue {
            background: #eaf2ff;
        }

        .bg-soft-purple {
            background: #f1efff;
        }

        .bg-soft-red {
            background: #ffeaea;
        }

        .bg-soft-gray {
            background: #f3f4f6;
        }
    </style>

</head>

<body>
    <div class="container py-5">
        <div class="panel-wrapper">
            <div class="d-flex justify-content-between align-items-center px-4 py-3 border-bottom">
                <div class="fw-bold fs-5 text-success">● Localwey</div>
                <a href="<?php echo PATH_BASE; ?>Admin/Index"><button class="btn btn-dark">Volver</button></a>
            </div>

            <div class="px-4 py-4">
                <h2 class="fw-bold mb-1">Administración de negocios</h2>
                <p class="text-muted mb-0">Gestione el contenido de los negocios.</p>
            </div>

            <div class="px-4 pb-4">
                <div class="row g-4">
                    <!-- Crear negocio -->
                    <div class="col-md-6">
                        <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100" data-bs-toggle="modal" data-bs-target="#modalAgregarNegocio">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="icon-box bg-soft-blue rounded-4 d-flex align-items-center justify-content-center">
                                    <svg width="26" height="26" fill="none" stroke="#3b82f6" stroke-width="2">
                                        <path d="M13 5v16M5 13h16" />
                                    </svg>
                                </div>

                                <div>
                                    <h6 class="fw-semibold mb-1">Agregar</h6>
                                    <p class="text-muted mb-0">Registrar un nuevo negocio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Consultar negocios -->
                    <div class="col-md-6">
                        <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100">
                            <a href="<?php echo PATH_BASE;?>Admin/ListBusiness" class="text-reset text-decoration-none">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="icon-box bg-soft-blue rounded-4 d-flex align-items-center justify-content-center">
                                        <svg width="26" height="26" fill="none" stroke="#6366f1" stroke-width="2">
                                            <rect x="4" y="5" width="18" height="4" />
                                            <rect x="4" y="11" width="18" height="4" />
                                            <rect x="4" y="17" width="18" height="4" />
                                        </svg>
                                    </div>

                                    <div>
                                        <h6 class="fw-semibold mb-1">Consultar negocios</h6>
                                        <p class="text-muted mb-0">Listado general de negocios.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center py-3 border-top">
                <footer>© 2026 Localwey</footer>
            </div>
        </div>
    </div>
    <!-- MODAL AGREGAR NEGOCIO -->
    <div class="modal fade" id="modalAgregarNegocio" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Negocio</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="" class="form-label fw-bold">Cliente <span class="text-danger">*</span></label>
                                <select name="" id="" class="form-control">
                                    <option value="">Seleccione una opción</option>
                                </select>
                            </div>
                            
                            <div class="col-12 col-md-6 mb-3">
                                <label for="" class="form-label fw-bold">Nombre del negocio  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-12">
                                <label for="" class="form-label fw-bold">Descripción</label>
                                <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>

                            <div class="col-12 col-md-4">
                                <label for="" class="form-label fw-bold">Municipio <span class="text-danger">*</span></label>
                                <select name="" id="" class="form-control">
                                    <option value="">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-4">
                                <label for="" class="form-label fw-bold">Corregimiento / Barrio</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-4 mb-3">
                                <label for="" class="form-label fw-bold">Tipo negocio <span class="text-danger">*</span></label>
                                <select name="" id="" class="form-control">
                                    <option value="">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="" class="form-label fw-bold">Dirección <span class="text-danger">*</span></label>
                                <input type="text" name="" id="" class="form-control">
                            </div>

                            <div class="col-12">
                                <label for="" class="form-label fw-bold">Imagen portada</label>
                                <input type="file" name="" id="" class="form-control">
                            </div>

                            <div class="col-12">
                                <label for="" class="form-label fw-bold">Imagen principal</label>
                                <input type="file" name="" id="" class="form-control">
                            </div>

                            <!-- <div class="col-12">
                                <label for="" class="form-label fw-bold">Galeria</label>
                                <input type="file" name="" id="" class="form-control" multiple>
                            </div> -->
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>