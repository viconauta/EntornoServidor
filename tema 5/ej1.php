<?php
    $notas = ["alumno" => "Juan Ramirez", "matematicas" => "Sobresaliente", "lengua" => "Notable", "historia" => "Notable", "dibujo" => "Insuficiente"];

    echo "<style>
            table {
                border-collapse: collapse;
                border-color: rgb(53, 196, 34);
            }
            tr:first-child {
                font-weight: bold;
                border-bottom: 3px solid rgb(53, 196, 34);
            }
            td {
                text-align: left;
                padding: 8px;
            }
        </style>";

    function boletin(array $notas): void {
        echo "<table border=1>
                <tr>
                    <td>Alumno</td>
                    <td>" . $notas["alumno"] . "</td>
                </tr>
                <tr>
                    <td>Matematicas</td>
                    <td>" . $notas["matematicas"] . "</td>
                </tr>
                <tr>
                    <td>Lengua</td>
                    <td>" . $notas["lengua"] . "</td>
                </tr>
                <tr>
                    <td>Historia</td>
                    <td>" . $notas["historia"] . "</td>
                </tr>
                <tr>
                    <td>Dibujo</td>
                    <td>" . $notas["dibujo"] . "</td>
                </tr>";
    }

    boletin($notas);
?>