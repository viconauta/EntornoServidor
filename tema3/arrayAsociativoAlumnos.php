<?php
    $alumnos = ["Ana" => 5, "Luis" => 6, "Jose" => 9, "Pedro" => 10, "Antonio" => 0, "Maria" => 2, "Encarna" => 7];

    echo "<table border=1>
            <tr>
                <td>Alumno</td>
                <td>Nota</td>
                <td>Resultado</td>
            </tr>";
            
    foreach($alumnos as $alumno => $nota) {
        echo "<tr>
                <td>".$alumno."</td>
                <td>".$nota."</td>
                <td>".comprobarNota($nota)."</td>
            </tr>";
        }
    echo "</table>";

    function comprobarNota($notas) {
        if($notas >= 0 && $notas <= 4) {
            return "Suspenso";
        } else if($notas === 5) {
            return "Aprobado";
        } else if($notas === 6) {
            return "Bien";
        } else if($notas >= 7 && $notas <= 8) {
            return "Notable";
        } else if($notas === 9) {
            return "Sobresaliente";
        } else if($notas === 10) {
            return "Matricula de honor";
        }
    }
?>