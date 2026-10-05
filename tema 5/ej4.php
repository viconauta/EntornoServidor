<?php
    $alumno = ["alumno" => "Pedro", "apellidos" => "Perez Martin", "entorno servidor" => 3, "entorno cliente" => 2, "despliegues" => 8];

    function notas(array $alumno): void {
        echo "<table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Entorno Servidor</th>
                    <th>Entorno Cliente</th>
                    <th>Despliegues</th>
                </tr>";
    }

    notas($alumno);
?>