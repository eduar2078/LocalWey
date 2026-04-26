<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración | Localwey</title>
    <link href="<?php echo PATH_BOOTSTRAP; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo PATH_FONTAWESOME; ?>css/all.min.css" rel="stylesheet">

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
                <a href="<?php echo PATH_BASE; ?>Admin/IndexBusiness"><button class="btn btn-dark">Volver</button></a>
            </div>

            <div class="px-4 py-4">
                <h2 class="fw-bold mb-1">Consulta de negocios</h2>
            </div>

            <table class="table table-striped">
                <thead class="text-center">
                    <tr>
                        <th>CLIENTE</th>
                        <th>NOMBRE NEGOCIO</th>
                        <th>TIPO NEGOCIO</th>
                        <th>MUNICIPIO</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        foreach ($allBusiness as $key => $value) {
                            echo '<tr>
                                <td>'.$value["f101_razon_social"].'</td>
                                <td>'.$value["f200_nombre"].'</td>
                                <td>'.substr(ucfirst(strtolower($value["f102_tipo_negocio"])), 0, strlen($value["f102_tipo_negocio"]) - 1).'</td>
                                <td>'.$value["f104_municipio"].'</td>
                                <td><span class="badge text-bg-success">'.$value["f103_estado"].'</span></td>
                                <td>
                                    <button type="button" class="btn btn-dark"><i class="fa-solid fa-images"></i></button>
                                    <button type="button" class="btn btn-dark"><i class="fa-solid fa-pen-to-square"></i></button>
                                </td>
                            </tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="<?php echo PATH_BOOTSTRAP; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo PATH_FONTAWESOME; ?>js/all.min.js"></script>
</body>
</html>