<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = 7;
        for($i = 1; $i <= 10; $i++) {
            echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
        }
    ?>
</body>
</html>