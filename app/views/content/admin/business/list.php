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
                <a href="<?php echo PATH_BASE; ?>Admin/IndexBusiness"><button class="btn btn-dark">Volver</button></a>
            </div>

            <div class="px-4 py-4">
                <h2 class="fw-bold mb-1">Consulta de negocios</h2>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>CLIENTE</th>
                        <th>NOMBRE NEGOCIO</th>
                        <th>TIPO NEGOCIO</th>
                        <th>MUNICIPIO</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($allBusiness as $key => $value) {
                            echo '<tr>
                                <td>'.$value["f101_razon_social"].'</td>
                                <td>'.$value["f200_nombre"].'</td>
                                <td>'.$value["f200_nombre"].'</td>
                                <td>'.$value["f200_nombre"].'</td>
                                <td>'.$value["f200_nombre"].'</td>
                                <td>'.$value["f200_nombre"].'</td>
                            </tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>