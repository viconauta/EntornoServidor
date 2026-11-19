<?php
require_once __DIR__ . '/datos.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test mundo animal</title>
</head>
<body>
    <main>
        <h1>Test mundo animal</h1>
        <form action="./corregir.php" method="post">
            <?php
            foreach($preguntas as $i){
                echo '<p>' . $i['pregunta'] . '</p>';
                foreach($clave['opciones'] as $opcion) {
                    echo '<input type="radius" id="r1" name="respuestas[' . $i . ']>';
                    
                }

            }
            ?>
        </form>
    </main>
</body>
</html>