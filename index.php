<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de archivo</title>
</head>

<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichero">
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <br><br><br>

    <form id="ajax">
        <input type="file" name="fichero" id="ajax2">
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <script src="index.js"></script>
</body>

</html>