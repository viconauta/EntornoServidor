<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $notas = [6, 8, 4, 10];

        function calcularMedia(array $notas): float {
            $suma = 0;
            foreach($notas as $nota) {
                $suma += $nota;
            }
            return $suma / count($notas);
        }
        echo calcularMedia($notas);
    ?>
</body>
</html>