<!DOCTYPE html>
<html lang="en">

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
                            <a href="<?php echo PATH_BASE; ?>Admin/ListBusiness" class="text-reset text-decoration-none">
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
                    <form id="form-create-business" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="slt-create-client" class="form-label fw-bold">Cliente <span class="text-danger">*</span></label>
                                <select name="slt-create-client" id="slt-create-client" class="form-control field" required>
                                    <option value="">Seleccione una opción</option>
                                    <?php
                                        foreach ($clientsEnableds as $key => $value) {
                                            echo '<option value="'.$value["f101_id"].'">'.$value["f101_razon_social"].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="col-12 col-md-4 mb-3">
                                <label for="slt-create-type-business" class="form-label fw-bold">Tipo negocio <span class="text-danger">*</span></label>
                                <select name="slt-create-type-business" id="slt-create-type-business" class="form-control field" required>
                                    <option value="">Seleccione una opción</option>
                                    <?php
                                        foreach ($typeBusinessEnableds as $key => $value) {
                                            echo '<option value="'.$value["f102_id"].'">'.ucfirst(strtolower(substr($value["f102_tipo_negocio"], 0, strlen($value["f102_tipo_negocio"]) - 1))).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <label for="txt-create-name-business" class="form-label fw-bold">Nombre del negocio <span class="text-danger">*</span></label>
                                <input type="text" name="txt-create-name-business" id="txt-create-name-business" class="form-control field" required>
                            </div>

                            <div class="col-12">
                                <label for="txt-create-description" class="form-label fw-bold">Descripción</label>
                                <textarea name="txt-create-description" id="txt-create-description" cols="30" rows="3" class="form-control field"></textarea>
                            </div>

                            <div class="col-12 col-md-4">
                                <label for="slt-create-department" class="form-label fw-bold">Departamento <span class="text-danger">*</span></label>
                                <select name="slt-create-department" id="slt-create-department" class="form-control field" onchange="getMunicipalityxDepartment(event)" required>
                                    <option value="">Seleccione una opción</option>
                                    <?php
                                        foreach ($departmentsEnableds as $key => $value) {
                                            echo '<option value="'.$value["f105_id"].'">'.$value["f105_departamento"].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="col-12 col-md-4">
                                <label for="slt-create-municipality" class="form-label fw-bold">Municipio <span class="text-danger">*</span></label>
                                <select name="slt-create-municipality" id="slt-create-municipality" class="form-control field" onchange="getNeighborhoodsxMunicipality(event)" required>
                                    <option value="">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-4">
                                <label for="slt-create-neighborhood" class="form-label fw-bold">Corregimiento / Barrio</label>
                                <select name="slt-create-neighborhood" id="slt-create-neighborhood" class="form-control field">
                                    <option value="">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="txt-create-address" class="form-label fw-bold">Dirección <span class="text-danger">*</span></label>
                                <input type="text" name="txt-create-address" id="txt-create-address" class="form-control field" required>
                            </div>

                            <div class="col-12">
                                <label for="file-create-image-frontPage" class="form-label fw-bold">Imagen portada <span class="text-danger">*</span></label>
                                <input type="file" name="file-create-image-frontPage" id="file-create-image-frontPage" class="form-control field" required>
                            </div>

                            <div class="col-12">
                                <label for="file-create-image-major" class="form-label fw-bold">Imagen principal <span class="text-danger">*</span></label>
                                <input type="file" name="file-create-image-major" id="file-create-image-major" class="form-control field" required>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" id="btn-create-business" onclick="createBusiness()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        const PATH_BASE = "<?php echo PATH_BASE; ?>"
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo PATH_JS; ?>sweetalert2@11.js"></script>
    <script src="<?php echo PATH_JS;?>jquery-4.0.0.min.js"></script>
    <script src="<?php echo PATH_JS; ?>app.js"></script>
    <script src="<?php echo PATH_JS; ?>admin.js"></script>
</body>

</html>