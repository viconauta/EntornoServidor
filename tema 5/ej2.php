<?php
    $color1 = "#1E293B";
    $color2 = "#38BDF8";
    $color3 = "#F1F5F9";
    
    echo "<style>
            table {
                width: 50%;
                height: 25%;
            }
        </style>";

    function colores(string $color1, string $color2, string $color3): void {
        $color = $color1;
        echo "<table border=1>";
        for ($i=0; $i < 3; $i++) { 
                if($i === 1) {
                    $color = $color2;
                }
                if($i === 2) {
                    $color = $color3;
                }
            echo "<tr style= background-color:" . $color . ";>
                    <td></td>
                    <td></td>
                </tr>";
        }
        echo "</table>";
    }

    colores($color1, $color2, $color3);
?>