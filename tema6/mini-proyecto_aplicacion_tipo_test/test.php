<?php
require_once __DIR__ . '/datos.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Test mundo animal</title>
</head>
<body>
    <main>
        <h1>Test mundo animal</h1>
        <form action="./corregir.php" method="post">
            <?php
            foreach($preguntas as $i => $clave){
                echo '<div class="cont-pregunta">';
                echo '<p>' . $i . ' ' . $clave['pregunta'] . '</p>';
                foreach($preguntas[$i]['opciones'] as $letra => $opcion) {
                    echo '<div class="respuesta">';
                    echo '<input type="radio" id="r" name="respuestas[' . $i . ']" value="' . $letra . '">';
                    echo '<label for="r">' . $opcion . '</label>';
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>
            <button type="submit">Enviar respuestas</button>
        </form>
    </main>
</body>
</html>