<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $importe = 110;
    if($importe < 0) {
        $importe = 0;
    }
    if($importe >= 100) {
        $importe *= 0.90;
    }
    echo $importe;
    ?>
</body>
</html>