<?php
    $clase1 = "oscuro";
    $clase2 = "claro";
    $clase3 = "naranja";
    
    echo "<style>
            .oscuro {
                background-color: black;
            }
            .claro {
                background-color: blue;
            }
            .naranja {
                background-color: orange;
            }
        </style>";

    echo "<style>
            table {
                width: 50%;
                height: 25%;
            }
        </style>";

    function coloresPorClase(string $clase1, string $clase2, string $clase3): void {
        $color = $clase1;
        echo "<table border=1>";
        for ($i=0; $i < 3; $i++) { 
                if($i === 1) {
                    $color = $clase2;
                }
                if($i === 2) {
                    $color = $clase3;
                }
            echo "<tr class= '" . $color . "';>
                    <td></td>
                    <td></td>
                </tr>";
        }
        echo "</table>";
    }

    coloresPorClase($clase1, $clase2, $clase3);
?>