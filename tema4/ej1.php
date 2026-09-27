<?php
    $ciudades = ["Granada" => 150000, "Madrid" => 3000000, "Barcelona" => 2879200, "Malaga" => 240000, "Sevilla" => 500000, "Valencia" => 1584600, "Tarragona" => 485210];

    echo "<hr>Tabla normal";
    mostrarTabla($ciudades);
    for($i = 0; $i < 2; $i++) {
        if($i === 0) {
            ksort($ciudades, SORT_STRING);
            echo "Por orden alfabetico.";
        } else if($i === 1) {
            asort($ciudades, SORT_NUMERIC);
            echo "Por cantidad de poblacion.";
        }
        mostrarTabla($ciudades);
    }

    asort($ciudades, SORT_NUMERIC);
    foreach($ciudades as $ciudad => $pob) {
        echo "La ciudad con menor poblacion es ".$ciudad." con ".$pob." habitantes.<br>";
        break;
    }
    arsort($ciudades, SORT_NUMERIC);
    foreach($ciudades as $ciudad => $pob) {
        echo "La ciudad con mayor poblacion es ".$ciudad." con ".$pob." habitantes.<br>";
        break;
    }

    function mostrarTabla($ciudades) {
        echo "<hr><table border=1>
            <tr>
                <td>Ciudad</td>
                <td>Poblacion</td>
            </tr>";
        foreach($ciudades as $ciudad => $pob) {
            echo "<tr>
                    <td>".$ciudad."</td>
                    <td>".$pob."</td>
                </tr>";
        }
        echo "</table><br><hr>";
    }
?>