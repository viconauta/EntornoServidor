<?php
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Novienbre", "Diciembre"];
    $diaSemana = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

    $temp = 7;
    foreach($meses as $mes) {
        echo $mes[$i];
        echo "<table border=1>
                <tr>";
            foreach($diaSemana as $dia) {
                echo "<td>".$dia."</td>";
            }
            echo "</tr>";
            for($i = 0; $i < diaMes($mes); $i++) {
                echo "<tr>";
                for($j = 1; $j <= diaMes($mes); $j++) {
                    if($j === $temp) {
                        break;
                    }
                    echo "<td>".$j."</td>";
                }
                $temp += 7;
                echo "</tr>";
            }
            
        echo "</table>";
    }

    function diaMes($nombre) {
        return match($nombre) {
            "Febrero" => 29,
            "Abril", "Junio", "Septiembre", "Noviembre" => 30,
            "Enero", "Marzo", "Mayo", "Julio", "Agosto",
            "Octubre", "Diciembre" => 31,
        };
    }
?>