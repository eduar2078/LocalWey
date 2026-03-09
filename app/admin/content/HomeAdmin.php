<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Administración | Localwey</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- TU CSS (vacío, NO se usa) -->
    <style></style>
</head>

<body>

<div class="container py-5">

    <div class="panel-wrapper">

        <!-- TOP BAR -->
        <div class="d-flex justify-content-between align-items-center px-4 py-3 border-bottom">
            <div class="fw-bold fs-5 text-success">● Localwey</div>
        </div>

        <!-- HEADER -->
        <div class="panel-header px-4 py-4">
            <h2 class="fw-bold mb-1">Panel de Administración</h2>
            <p class="text-muted mb-0">Gestione el contenido de la plataforma.</p>
        </div>

        <!-- ACTION CARDS -->
        <div class="px-4 py-4">
            <div class="row g-4">

                <!-- AGREGAR -->
                <div class="col-md-6">
                    <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100"
                         data-bs-toggle="modal"
                         data-bs-target="#modalAgregarNegocio">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="icon-box bg-soft-blue rounded-4 d-flex align-items-center justify-content-center">
                                <svg width="26" height="26" fill="none" stroke="#3b82f6" stroke-width="2">
                                    <path d="M13 5v16M5 13h16"/>
                                </svg>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Agregar Contenido</h6>
                                <p class="text-muted mb-0">Registrar un nuevo negocio.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100"
                         data-bs-toggle="modal"
                         data-bs-target="#modalVerContenidos">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="icon-box bg-soft-purple rounded-4 d-flex align-items-center justify-content-center">
                                <svg width="26" height="26" fill="none" stroke="#6366f1" stroke-width="2">
                                    <rect x="4" y="5" width="18" height="4"/>
                                    <rect x="4" y="11" width="18" height="4"/>
                                    <rect x="4" y="17" width="18" height="4"/>
                                </svg>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Ver Contenidos</h6>
                                <p class="text-muted mb-0">Listado general de negocios.</p>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100"
                         data-bs-toggle="modal"
                         data-bs-target="#modalEliminarNegocio">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="icon-box bg-soft-red rounded-4 d-flex align-items-center justify-content-center">
                                <svg width="26" height="26" fill="none" stroke="#ef4444" stroke-width="2">
                                    <path d="M3 6h20"/>
                                    <path d="M8 6v14M12 6v14M16 6v14"/>
                                </svg>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Eliminar Negocios</h6>
                                <p class="text-muted mb-0">Eliminar registros existentes.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="action-card bg-white border rounded-4 shadow-sm p-4 h-100"
                         data-bs-toggle="modal"
                         data-bs-target="#modalConfiguracion">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="icon-box bg-soft-gray rounded-4 d-flex align-items-center justify-content-center">
                                <svg width="26" height="26" fill="none" stroke="#6b7280" stroke-width="2">
                                    <circle cx="13" cy="13" r="3"/>
                                    <path d="M13 2v3M13 21v3"/>
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
            <footer>© 2024 Localwey</footer>
        </div>

    </div>
</div>



<!-- MODAL AGREGAR NEGOCIO -->
<div class="modal fade" id="modalAgregarNegocio" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold">Agregar Negocio</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nombre del negocio</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tipo de negocio</label>
                        <select class="form-select">
                            <option>Restaurante</option>
                            <option>Hotel</option>
                            <option>Tienda</option>
                            <option>Servicio</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Descripción</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Dirección</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Teléfono</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Correo electrónico</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary">Guardar Negocio</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL VER CONTENIDOS -->
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ejemplo</td>
                            <td>Restaurante</td>
                            <td>Calle 123</td>
                            <td>3000000000</td>
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
                <h5 class="modal-title text-danger fw-semibold">Eliminar Negocio</h5>
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
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold">Configuración del Sistema</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Estado de la plataforma</label>
                    <select class="form-select">
                        <option>Activa</option>
                        <option>Mantenimiento</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Región principal</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>