<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px dotted #FF0000;
        }
    </style>
</head>

<body>

    <div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="has-text-centered">
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($matriz_usuarios as $key => $row) {
                    echo '
                    <tr class="has-text-centered">
                        <td>' . $row['nombre'] . '</td>
                        <td>' . $row['apellido'] . '</td>
                        <td>' . $row['usuario'] . '</td>
                        <td>' . $row['email'] . '</td>
                        <td>
                            <a href="index.php?vista=user_update&user_id_up=' . $row['usuario_id'] . '" class="button is-success is-rounded is-small">Actualizar</a>
                        </td>
                        <td>
                        <a href="index.php?vista=user_delete&user_id_del=' . $row['usuario_id'] . '" class="button is-danger is-rounded is-small">Eliminar</a>
                        </td>
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
    </div>

</body>


</html>