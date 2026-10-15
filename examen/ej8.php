<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $precio = 100;
        $descuento = 10;

        $precio2 = 80;
        $descuento2 = 25;
        function precioFinal(float $precio, int $descuento): float {
            if($precio < 0){
                $precio = 0;
            }
            if($descuento < 0) {
                $descuento = 0;
            } else if ($descuento > 100) {
                $descuento = 100;
            }
            $resta = ($precio / 100) * $descuento;
            return $precioFinal = $precio - $resta;
        }
        echo precioFinal($precio, $descuento);
        echo "<br>";
        echo precioFinal($precio2, $descuento2);
    ?>
</body>
</html>