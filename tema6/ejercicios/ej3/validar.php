<?php
    header("Content-Type: text/html; charset=utf-8");
    if($_SERVER["REQUEST_METHOD"] !== "POST") {
        http_response_code(405);
        exit("Envia el formulario.");
    }

    $entrada = $_POST["frutas"] ?? [];
    $permitido = ["higo", "piña", "melon", "chirimoya", "sandia", "ciruela"];
    $frutas = [];

    if(!is_array($entrada)) {
        http_response_code(400);
        exit("Seleccion incorrecta.");
    }

    foreach($entrada as $entry) {
        if(!in_array($entry, $permitido, true)) {
            http_response_code(400);
            exit("Opcion no permitida.");
        } else {
            $frutas[] = $entry;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
        foreach($frutas as $fruta) {
            echo $fruta . "<br>";
        }
        ?>
    </main>
</body>
</html>