<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="getData.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <br>

        <label for="asignatura">asignatura</label>
        <select name="asignatura[]" id="asignatura" multiple>
            <option value="ingles">ingles</option>
            <option value="mate">mate</option>
            <option value="ciencia">ciencia</option>
            <option value="lenguaje">lenguaje</option>
        </select>

        <br><br>

        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">
            Manzana
            </input>
        </label>
        <label for="opcion-2">
            <input type="checkbox" value="Pera" id="opcion-2" name="frutas[]">
            Pera
            </input>
        </label>
        <label for="opcion-3">
            <input type="checkbox" value="Uva" id="opcion-3" name="frutas[]">
            Uva
            </input>
        </label>

        <br><br><br>

        <button type="submit">Enviar</button>

    </form>
</body>

</html>