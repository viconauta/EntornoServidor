<?php
require_once __DIR__ . '/datos.php';

header('Content-Type: text/html; charset=utf-8');
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Envia el formulario.');
}

$plantilla = [];
foreach($preguntas as $i => $clave) {
    $plantilla[$i] = $clave['correcta'];
}

$letrasPermitidas = ['a', 'b', 'c', 'd'];
$entrada = $_POST['respuestas'] ?? [];
$respuestas = [];
$puntuacion = 0;

foreach($entrada as $entry => $letra) {
    if(!array_key_exists($entry, $plantilla)) {
        http_response_code(400);
        exit('Seleccion incorrecta.');
    }
    if(!in_array($letra, $letrasPermitidas, true)) {
        http_response_code(400);
        exit('Opcion no permitida.');
    }
    else {
        $respuestas[$entry] = $letra;
        if($letra === $plantilla[$entry]) {
            $puntuacion++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Test corregido</title>
</head>
<body>
    <main>
        <h1>Correccion</h1>
        <h2>Nota: <?php echo $puntuacion ?>/10</h2>
        <?php
        foreach($preguntas as $i => $clave){
            echo '<div class="cont-pregunta">';
            echo '<p>' . $i . ' ' . $clave['pregunta'] . '</p>';
            foreach($preguntas[$i]['opciones'] as $letra => $opcion) {
                $clase = "";
                
                if(!isset($respuestas[$i]) || $letra !== $respuestas[$i]) {
                    if($letra === $plantilla[$i]){
                        $clase = 'incorrecta';
                    }
                    else {
                        $clase = 'en-blanco';
                    }
                }
                else if($letra === $plantilla[$i] && $letra === $respuestas[$i]) {
                    $clase = 'correcta';
                }
                
                echo '<div class="respuesta ' . $clase . '">';
                echo '<input type="radio" id="r" name="respuestas[' . $i . ']" value="' . $letra . '">';
                echo '<label for="r">' . $opcion . '</label>';
                echo '</div>';
                $clase = '';
            }
            echo '</div>';
        }
        ?>
    </main>
</body>
</html>