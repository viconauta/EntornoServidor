<?php
    require_once 'datos.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <main>
        <form action="./resultado.php" method="post">
            <?php
                foreach ($preguntas as $num => $preg) {
                    echo 'Pregunta:<br>';
                    echo $num . ' ' . $preg['pregunta'] . '<br>';
                    foreach($preguntas[$num]['opciones'] as $letra => $res) {
                        echo '<input type="radio" id="r" name="respuestas[' . $num . ']" value="' . $letra . '">';
                        echo '<label for="r">' . $letra . ') ' . $res . ' </label><br>';
                    }
                    echo '<hr>';
                }
            ?>
            <button type="submit">Enviar test</button>
        </form>
    </main>
</body>
</html>