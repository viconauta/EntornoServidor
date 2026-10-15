<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid blueviolet;
        }
        th {
            background-color: black;
            color: white;
            padding: 0 2rem;
            border: 2px solid blueviolet;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
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
                        <th>Nota media</th>
                    </tr>
                    <tr>
                        <td>" . $alumno["alumno"] . "</td>
                        <td>" . $alumno["apellidos"] . "</td>
                        <td>" . $alumno["entorno servidor"] . "</td>
                        <td>" . $alumno["entorno cliente"] . "</td>
                        <td>" . $alumno["despliegues"] . "</td>
                        <td>" . media(
                            $alumno["entorno servidor"], $alumno["entorno cliente"], $alumno["despliegues"]) . "</td>
                    </tr>
                </table>";
        }

        function media(float $nota1, float $nota2, float $nota3): float {
            $suma = ($nota1 + $nota2 + $nota3) / 3;
            return number_format($suma, 2);
        }

        notas($alumno);
    ?>
</body>
</html>    