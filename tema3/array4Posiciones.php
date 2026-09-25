<?php
    echo "
        <Style>
            table{
                border-collapse: collapse;
            }
            td{
                padding: 0.2rem 1rem 0.2rem 1rem;
            }
            tr:first-child{
                color: white;
                background-color: black;
            }
            tr{
                background-color: #76923C;
                color: white;
            }
            tr:nth-child(even){
                background-color: #9BBB59;
            }

        </style>";
    $numeros = [3, 8, 7, -6];
    echo "<table>
            <tr>
                <td><b>Numero</b></td>
                <td><b>Cuadrado</b></td>
                <td><b>Cubo</b></td>
            </tr>";
    foreach($numeros as $num){
        $cuadrado = $num * $num;
        $cubo = $cuadrado * $num;
        echo "<tr>
                <td>".$num."</td>
                <td>".$cuadrado."</td>
                <td>".$cubo."</td>
            </tr>";
    };
    echo "</table>"
?>