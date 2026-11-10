<?php
    header("Content-Type: text/html; charset=utf-8");
    if($_SERVER["REQUEST_METHOD"] !== "post") {
        http_response_code(405);
        exit("Envia el formulario.");
    }

    $entrada = $_POST["respuestas"] ?? [];
    $correctas = [
        [1 , "todos"],
        [2 , "igual"],
        [3 , "vivos"],
        [4 , "moja"],
        [5 , "febrero"],
        [6 , "entrar"],
        [7 , "silla"],
        [8 , "silencio"],
        [9 , "luz"],
        [10 , "futuro"]
    ] 
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

        ?>
    </main>
</body>
</html>