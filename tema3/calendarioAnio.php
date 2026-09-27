<?php
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    $diaSemana = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

    $diaInicio = 1;
    foreach($meses as $mes) {
        echo $mes;
        echo "<table border=1>
                <tr>"; 
        foreach($diaSemana as $dia) {
            echo "<td>".$dia."</td>";
        }
        echo "</tr><tr>";
        for ($i = 1; $i < $diaInicio; $i++) {
            echo "<td></td>";
        }
        for ($dia = 1; $dia <= diaMes($mes); $dia++) {
            echo "<td>$dia</td>";
            $diaInicio = ($diaInicio % 7) + 1;
            if ($diaInicio == 1) {
                echo "</tr>";
            }
        }
            echo "</table><br>";
    }

    function diaMes($nombre) {
        return match($nombre) {
            "Febrero" => 28,
            "Abril", "Junio", "Septiembre", "Noviembre" => 30,
            "Enero", "Marzo", "Mayo", "Julio", "Agosto",
            "Octubre", "Diciembre" => 31,
        };
    }
?>