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

    <table>
        <tr>
            <th>Nombre</th>
        </tr>
        <tbody>
            <?php
            foreach ($matriz_productos as $key => $row) {
                echo "<tr><td>" . $row["nombre"] . "</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>