<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $puntuaciones = [
            "Ana" => 72,
            "Luis" => 85,
            "Eva" => 64,
            "Pablo" => 91
        ];
        arsort($puntuaciones);
        foreach($puntuaciones as $punt => $valor) {
            echo "Nombre: " . $punt . " / Puntuacion: " . $valor . "<br>";
        }
    ?>
</body>
</html>