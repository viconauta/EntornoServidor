<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    header("Content-Type: text/html; charset=utf-8");
    if($_SERVER["REQUEST_METHOD"] !== "POST") {
        http_response_code(405);
        exit("Envia el formulario.");
    }

    $entrada = $_POST["frutas"] ?? "";
    if(!is_string($entrada) || trim($entrada) === "") {
        http_response_code(400);
        exit("Escribe una fruta.");
    }
    $frutas = trim($entrada);

    foreach ($frutas as $fruta) {
        echo $fruta;
    }
    ?>
</body>
</html>