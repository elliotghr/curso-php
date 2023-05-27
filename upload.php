<?php
$archivo = $_FILES["fichero"];

// var_dump($archivo);
// echo '<br>';
// echo ($archivo["name"]);
// echo '<br>';
// echo ($archivo["type"]);
// echo '<br>';
// echo ($archivo["tmp_name"]);
// echo '<br>';
// echo ($archivo["error"]);
// echo '<br>';
// echo ($archivo["size"]);
// echo '<br>';

$destino = "archivos";



if (mime_content_type($archivo["tmp_name"]) != "image/png" && mime_content_type($archivo["tmp_name"]) != "image/jpg" && mime_content_type($archivo["tmp_name"]) != "application/pdf") {
    $res = ["status" => "Archivo invalido"];
    echo json_encode($res);
    return;
}

if (($archivo["size"] / 1024) > 3 * 1024) {
    $res = ["status" => "El archivo superó el peso indicado"];
    echo json_encode($res);
    return;
}

if (!file_exists($destino)) {
    if (!mkdir("archivos", 0777)) {
        $res = ["status" => "Error al crear el directorio"];
        echo json_encode($res);
        exit();
    }
}

chmod("archivos", 0777);

if (move_uploaded_file($archivo["tmp_name"], $destino . '/' . $archivo["name"])) {
    $res = [
        "err" => false,
        "status" => "Archivo subido correctamente",
        "file" => $archivo["name"],
    ];
} else {
    $res = [
        "err" => true,
        "status" => "Ha ocurrido un error",
        "file" => $archivo["name"],
    ];
}

echo json_encode($res);
