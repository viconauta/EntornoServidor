<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blanco td{
            background-color: aliceblue;
        }
        .negro td{
            background-color: black;
            color: aliceblue;
        }
        .azul td{
            background-color: blueviolet;
            color: aliceblue;
        }
    </style>
</head>
<body>
    <?php
    header("Content-Type: text/html; charset=utf-8");
    if($_SERVER["REQUEST_METHOD"] !== "POST") {
        http_response_code(405);
        exit("Envia el formulario");
    }

    $entrada = $_POST["numero"] ?? "";
    $numero = is_string($entrada)
    ? filter_var($entrada, FILTER_VALIDATE_INT)
    : false;

    $validarColor = $_POST["color"] ?? "";
    if(!is_string($validarColor) || trim($validarColor) === "") {
        http_response_code(400);
        exit("Escribe un nombre");
    }
    $color = trim($validarColor);

    echo "<h1>Tabla del " . $numero . "</h1>";
    echo '<table class="' . $color . '">';
    for ($i = 0; $i <= 10; $i++) {
        echo "<tr>
                <td>" . $numero . " x " . $i . " = " . ($numero * $i) . "</td>
            </tr>";
    }
    echo "</table>";
    ?>
</body>
</html>