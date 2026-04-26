<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Administración | Localwey</title>

    <link href="<?php echo PATH_BOOTSTRAP; ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="<?php echo PATH_FONTAWESOME; ?>css/all.min.css" href="stylesheet">

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
            </div>

            <div class="px-4 py-4">
                <h2 class="fw-bold mb-1">Panel de Administración</h2>
                <p class="text-muted mb-0">Gestione el contenido de la plataforma.</p>
            </div>

            <div class="px-4 pb-4">
                <div class="row g-4">
                    <!-- MUNICIPIOS -->
                    <div class="col-md-6">
                        <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100" data-bs-toggle="modal" data-bs-target="#modalAgregarNegocio">
                            <a href="<?php echo PATH_BASE;?>Admin/ListMunicipality" class="text-reset text-decoration-none">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="icon-box bg-soft-blue rounded-4 d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-city"></i>
                                    </div>

                                    <div>
                                        <h6 class="fw-semibold mb-1">Municipios</h6>
                                        <p class="text-muted mb-0">Consulta y configura los municipios disponibles.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- NEGOCIOS -->
                    <div class="col-md-6">
                        <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100" data-bs-toggle="modal" data-bs-target="#modalAgregarNegocio">
                            <a href="<?php echo PATH_BASE;?>Admin/IndexBusiness" class="text-reset text-decoration-none">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="icon-box bg-soft-blue rounded-4 d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                                            <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                                        </svg>
                                    </div>

                                    <div>
                                        <h6 class="fw-semibold mb-1">Negocios</h6>
                                        <p class="text-muted mb-0">Crea y consulta los negocios.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- USUARIOS -->
                    <div class="col-md-6">
                        <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100" data-bs-toggle="modal" data-bs-target="#modalAgregarNegocio">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="icon-box bg-soft-blue rounded-4 d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                    </svg>
                                </div>

                                <div>
                                    <h6 class="fw-semibold mb-1">Usuarios</h6>
                                    <p class="text-muted mb-0">Crea y consulta los negocios.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center py-3 border-top">
                <footer>© 2026 Localwey</footer>
            </div>
        </div>
    </div>
    <!-- MODAL VER NEGOCIOS -->
    <div class="modal fade" id="modalVerContenidos" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title fw-semibold">Listado de Negocios</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <table class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Dirección</th>
                                <th>Contacto</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Restaurante Ejemplo</td>
                                <td>Restaurante</td>
                                <td>Calle 123</td>
                                <td>3000000000</td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-warning me-2"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalEditarNegocio">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-info"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalGestionAnuncios">
                                        Anuncios
                                    </button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>
        </div>
    </div>




    <!-- MODAL EDITAR -->

    <div class="modal fade" id="modalEditarNegocio" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Editar Negocio</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <form>

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" value="Restaurante Ejemplo">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dirección</label>
                            <input type="text" class="form-control" value="Calle 123">
                        </div>

                    </form>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn btn-warning">Guardar Cambios</button>
                </div>

            </div>
        </div>
    </div>



    <!-- MODAL ANUNCIOS -->

    <div class="modal fade" id="modalGestionAnuncios" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Gestión de Anuncios</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <button class="btn btn-primary mb-3"
                        data-bs-toggle="modal"
                        data-bs-target="#modalCrearAnuncio">
                        Crear anuncio
                    </button>
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Promo 2x1</td>
                                <td>05/03/2026</td>
                                <td>Activo</td>
                                <td>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>
        </div>
    </div>



    <!-- MODAL ELIMINAR -->

    <div class="modal fade" id="modalEliminarNegocio" tabindex="-1">
        <div class="modal-dialog modal-md modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title text-danger">Eliminar Negocio</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <p>
                        Esta acción eliminará permanentemente el negocio seleccionado.
                        <strong>No se puede deshacer.</strong>
                    </p>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </div>

            </div>
        </div>
    </div>



    <!-- MODAL CONFIG -->

    <div class="modal fade" id="modalConfiguracion" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Configuración del Sistema</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Estado de la plataforma</label>
                        <select class="form-select">
                            <option>Activa</option>
                            <option>Mantenimiento</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Región principal</label>
                        <input type="text" class="form-control">
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary">Guardar</button>
                </div>

            </div>
        </div>
    </div>

    <!-- MODAL CREAR ANUNCIO -->
    <div class="modal fade" id="modalCrearAnuncio" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title fw-semibold">Crear Nuevo Anuncio</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <form>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Título del anuncio</label>
                            <input type="text" class="form-control" placeholder="Ej: Promo 2x1 en hamburguesas">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Descripción</label>
                            <textarea class="form-control" rows="3" placeholder="Describe el anuncio..."></textarea>
                        </div>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Fecha de inicio</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Fecha de finalización</label>
                                <input type="date" class="form-control">
                            </div>

                        </div>

                        <div class="mt-3">
                            <label class="form-label fw-semibold">Imagen del anuncio</label>
                            <input type="file" class="form-control">
                        </div>

                        <div class="mt-3">
                            <label class="form-label fw-semibold">Estado</label>
                            <select class="form-select">
                                <option value="activo">Activo</option>
                                <option value="pausado">Pausado</option>
                            </select>
                        </div>

                    </form>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary">Publicar Anuncio</button>
                </div>

            </div>
        </div>
    </div>

    <script src="<?php echo PATH_BOOTSTRAP; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo PATH_FONTAWESOME; ?>js/all.min.js"></script>
</body>
</html>