<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $notas = [4, 7, 5, 3, 9, 6];
        $contAprob = 0;
        $contSusp = 0;
        foreach($notas as $nota) {
            if($nota > 10) {
                $nota = 10;
            } else if($nota < 0) {
                $nota = 0;
            }
            if($nota >= 5) {
                $contAprob++;
            } else {
                $contSusp++;
            }
        }
        echo "Aprobados: " . $contAprob . "\nSuspensos: " . $contSusp;
    ?>
</body>
</html>