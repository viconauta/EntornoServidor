<?php
    $grupo = [
        ["Alumno" => "Antonio", "Matematicas" => 5, "Lengua" => 8.3, "Ciencia Naturales" => 9, "Geografia" => 7],
        ["Alumno" => "Ana", "Matematicas" => 8, "Lengua" => 7, "Ciencia Naturales" => 4.5, "Geografia" => 9],
        ["Alumno" => "Benito", "Matematicas" => 9, "Lengua" => 6.75, "Ciencia Naturales" => 9, "Geografia" => 3.1]
    ];

    $nombre = "Antonio";

    function cabeceraTabla(): void {
        echo "<table border=1>
                <tr>
                    <td>Alumno</td>
                    <td>Matematicas</td>
                    <td>Lengua</td>
                    <td>Ciencias Naturales</td>
                    <td>Geografia</td>
                    <td>Media</td>
                </tr>";
    }

    cabeceraTabla();

    for($i = 0; $i < count($grupo); $i++) {
        echo "<tr>
                <td>".$grupo[$i]["Alumno"]."</td>
                <td>".$grupo[$i]["Matematicas"]."</td>
                <td>".$grupo[$i]["Lengua"]."</td>
                <td>".$grupo[$i]["Ciencia Naturales"]."</td>
                <td>".$grupo[$i]["Geografia"]."</td>
                <td>".media($grupo, $i)."</td>
            </tr>";
    }
    echo "</table><br>";

    function media(array $grupo, int $num): float {
        $suma = $grupo[$num]["Matematicas"] + $grupo[$num]["Lengua"] + $grupo[$num]["Ciencia Naturales"] + $grupo[$num]["Geografia"];
        return $suma / 4;
    }

    cabeceraTabla();
    for($i = 0; $i < count($grupo); $i++) {
        if($grupo[$i]["Alumno"] == $nombre) {
            echo "<tr>
                <td>".$grupo[$i]["Alumno"]."</td>
                <td>".$grupo[$i]["Matematicas"]."</td>
                <td>".$grupo[$i]["Lengua"]."</td>
                <td>".$grupo[$i]["Ciencia Naturales"]."</td>
                <td>".$grupo[$i]["Geografia"]."</td>
                <td>".media($grupo, $i)."</td>
            </tr>";
        }
    }
    echo "</table>";
?>