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
            </div>

            <div class="px-4 py-4">
                <h2 class="fw-bold mb-1">Panel de Administración</h2>
                <p class="text-muted mb-0">Gestione el contenido de la plataforma.</p>
            </div>

            <div class="px-4 pb-4">
                <div class="row g-4">

                    <!-- AGREGAR -->
                    <div class="col-md-6">
                        <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100"
                            data-bs-toggle="modal"
                            data-bs-target="#modalAgregarNegocio">

                            <div class="d-flex gap-3 align-items-center">

                                <div class="icon-box bg-soft-blue rounded-4 d-flex align-items-center justify-content-center">

                                    <svg width="26" height="26" fill="none" stroke="#3b82f6" stroke-width="2">
                                        <path d="M13 5v16M5 13h16" />
                                    </svg>

                                </div>

                                <div>
                                    <h6 class="fw-semibold mb-1">Agregar Contenido</h6>
                                    <p class="text-muted mb-0">Registrar un nuevo negocio.</p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- VER -->
                    <div class="col-md-6">
                        <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100"
                            data-bs-toggle="modal"
                            data-bs-target="#modalVerContenidos">

                            <div class="d-flex gap-3 align-items-center">

                                <div class="icon-box bg-soft-purple rounded-4 d-flex align-items-center justify-content-center">

                                    <svg width="26" height="26" fill="none" stroke="#6366f1" stroke-width="2">
                                        <rect x="4" y="5" width="18" height="4" />
                                        <rect x="4" y="11" width="18" height="4" />
                                        <rect x="4" y="17" width="18" height="4" />
                                    </svg>

                                </div>

                                <div>
                                    <h6 class="fw-semibold mb-1">Ver Contenidos</h6>
                                    <p class="text-muted mb-0">Listado general de negocios.</p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- ELIMINAR -->
                    <div class="col-md-6">
                        <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100"
                            data-bs-toggle="modal"
                            data-bs-target="#modalEliminarNegocio">

                            <div class="d-flex gap-3 align-items-center">

                                <div class="icon-box bg-soft-red rounded-4 d-flex align-items-center justify-content-center">

                                    <svg width="26" height="26" fill="none" stroke="#ef4444" stroke-width="2">
                                        <path d="M3 6h20" />
                                        <path d="M8 6v14M12 6v14M16 6v14" />
                                    </svg>

                                </div>

                                <div>
                                    <h6 class="fw-semibold mb-1">Eliminar Negocios</h6>
                                    <p class="text-muted mb-0">Eliminar registros existentes.</p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- CONFIG -->
                    <div class="col-md-6">
                        <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100"
                            data-bs-toggle="modal"
                            data-bs-target="#modalConfiguracion">

                            <div class="d-flex gap-3 align-items-center">

                                <div class="icon-box bg-soft-gray rounded-4 d-flex align-items-center justify-content-center">

                                    <svg width="26" height="26" fill="none" stroke="#6b7280" stroke-width="2">
                                        <circle cx="13" cy="13" r="3" />
                                        <path d="M13 2v3M13 21v3" />
                                    </svg>

                                </div>

                                <div>
                                    <h6 class="fw-semibold mb-1">Configuración</h6>
                                    <p class="text-muted mb-0">Parámetros del sistema.</p>
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

                        <div class="mb-3">
                            <label class="form-label">Nombre del negocio</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tipo</label>
                            <select class="form-select">
                                <option>Restaurante</option>
                                <option>Hotel</option>
                                <option>Tienda</option>
                                <option>Servicio</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dirección</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <label class="form-label">Teléfono</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control">
                            </div>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>