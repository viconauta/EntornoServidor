<?php
    $persona = [
        ["nombre" => "Pepe", "peso" => 4.5, "color" => "Marron", "edad" => 12],
        ["nombre" => "Sparky", "peso" => 3, "color" => "Blanco", "edad" => 2],
        ["nombre" => "Tobby", "peso" => 7.2, "color" => "Beige", "edad" => 8],
        ["nombre" => "Bigotes", "peso" => 4, "color" => "Negro", "edad" => 9],
        ["nombre" => "Ricky", "peso" => 0.1, "color" => "Verde", "edad" => 2]
    ];

    echo "<style>
            table {
                border-collapse: collapse;
            }
            tr:first-child {
                background-color: orange;
                color: white;
                border-bottom: 3px solid black;
            }
            tr:nth-child(even) {
                background-color: rgb(180, 180, 180);
            }
            td:first-child {
                background-color: green;
                color: white;
                text-align: left;
            }
        </style>";

    function cabecera(): void {
        echo "<table>
                <tr>
                    <td>Fila</td>
                    <td>Nombre</td>
                    <td>Peso</td>
                    <td>Color</td>
                    <td>Edad</td>
                </tr>";
    }

    echo "<hr>Mostrar todas las mascotas que tiene el usuario";

    cabecera();

    for($i = 0; $i < count($persona); $i++) {
        echo "<tr>
                <td>" . $i . "</td>
                <td>" . $persona[$i]["nombre"] . "</td>
                <td>" . $persona[$i]["peso"] . "</td>
                <td>" . $persona[$i]["color"] . "</td>
                <td>" . $persona[$i]["edad"] . "</td>
            </tr>";
    }

    echo "</table><br>";

    echo "<hr>Mostrar sólo el peso de la mascota con código '3'";
    $codigo = 3;
    echo "La mascota con codigo '" . $codigo . "' pesa " . $persona[$codigo]["peso"] . " Kilos.";


    echo "<hr>Mostrar sólo el color de la mascota de nombre Sparky";
    $nombre = "Sparky";
    foreach($persona as $nom) {
        if($nom["nombre"] === $nombre) {
            echo $nombre . " es de color " . $nom["color"];
        }
    }


    echo "<hr>Mostrar  todos los datos de la mascota más mayor";
    $indice = 0;
    $mayorEdad = $persona[0]["edad"];
    foreach($persona as $i => $per) {
        if($per["edad"] > $mayorEdad) {
            $mayorEdad = $per["edad"];
            $indice = $i;
        }
    }
    cabecera();
    echo "<tr>
                <td>" . $indice . "</td>
                <td>" . $persona[$indice]["nombre"] . "</td>
                <td>" . $persona[$indice]["peso"] . "</td>
                <td>" . $persona[$indice]["color"] . "</td>
                <td>" . $persona[$indice]["edad"] . "</td>
            </tr>
        </table><br>";


    echo "<hr>Mostrar el nombre de la mascota que pesa menos";
    $indiceMenor = 0;
    $menorPeso = $persona[0]["peso"];
    foreach($persona as $i => $per) {
        if($per["peso"] < $menorPeso) {
            $menorPeso = $per["peso"];
            $indiceMenor = $i;
        }
    }  
    echo "La mascota de menor peso es " . $persona[$indiceMenor]["nombre"];
?>