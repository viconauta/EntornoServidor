<?php
require_once 'datos.php';

header('Content-Type: text/html; charset=utf-8');
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Envia el formulario.');
}

$resCorrecta = [];
foreach ($preguntas as $num => $preg) {
    $resCorrecta[$num] = $preg['correcta'];
}
    
$entrada = $_POST['respuestas'] ?? [];
$letraPermitida = ['a', 'b'];
$respuestas = [];
$puntuacion = 0;

forEach($entrada as $entry => $letra) {
    if(!array_key_exists($entry, $resCorrecta)) {
        http_response_code(400);
        exit('Seleccion incorrecta.');
    }
    if(!in_array($letra, $letraPermitida, true)) {
        http_response_code(400);
        exit('Opcion no permitida');
    } else {
        $respuestas[$entry] = $letra;
        if($letra === $resCorrecta[$entry]) {
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
    <title>Resultados</title>
</head>
<body>
    <main>
        <h1>Nota: <?php echo $puntuacion;?></h1>
        <?php
            foreach($respuestas as $num => $letra) {
                if($letra === $resCorrecta[$num]) {
                    echo '<p><hr>RESPUESTA CORRECTA: '. strtoupper($resCorrecta[$num]) . '</p>';
                } else {
                    echo '<p><hr>RESPUESTA INCORRECTA: '. strtoupper($resCorrecta[$num]) . '</p>';  
                }
                echo '<p> ' . $num . ' ' . $preguntas[$num]['pregunta'];
                foreach($preguntas[$num]['opciones'] as $opcion => $res) {
                    echo '<p>' . $opcion . ') ' . $res . ' </p>';
                }
            }
        ?>
    </main>
</body>
</html>