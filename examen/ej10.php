<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $matriz = [
            [2, 4, 6],
            [1, 3, 5]
        ];

        function sumarFilas(array $matriz): void {
            $num = 1;
            foreach($matriz as $fila) {
                $suma = 0;
                foreach($fila as $valor) {
                    $suma += $valor;
                }
                echo "Fila " . $num . " suma " . $suma . "<br>";
                $num++;
            }
        }

        sumarFilas($matriz);
    ?>
</body>
</html>