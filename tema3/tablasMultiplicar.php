<?php
    echo "
        <style>
            table{
                border: 2px solid #BF4E4E;
            }
            tr{
                background-color: #DFA7A6;
            }
            tr:nth-child(even) {
                background-color: #EFD3D2;
            }
            td{
                border: 2px solid #BF4E4E;
                padding: 0.2rem 1rem 0.2rem 1rem;
                text-align: center;
        </style>
        ";
    for($tabla = 0; $tabla < 10; $tabla++) {
        echo "<table>";
        for($fila = 0; $fila < 10; $fila++) {
            echo "<tr>";
            for($columna = 0; $columna < 1; $columna++) {
                echo "<td><b>".($tabla + 1)." x ".($fila + 1)."</b></td><td>".($tabla + 1) * ($fila + 1)."</td>";
            }
            echo "</tr>";
        }
        echo "</table><br>";
    }
?>