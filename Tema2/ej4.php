<?php
    $mascota['nombre'] = "Firulais";
    $mascota['familia'] = "Perro";
    $mascota['raza'] = "Mastin";
    $mascota['color'] = "Azul";
    $mascota['peso'] = "50";
    $mascota['altura'] = "40";
    $mascota['edad'] = "5";
?>

<table border = "1">
    <tr align = "center">
        <td>Nombre</td>
        <td>Familia</td>
        <td>Raza</td>
        <td>Color</td>
        <td>Peso</td>
        <td>Altura</td>
        <td>Edad</td>
    </tr>
    <tr align = "center">
        <td><?php echo $mascota['nombre']; ?></td>
        <td><?php echo $mascota['familia']; ?></td>
        <td><?php echo $mascota['raza']; ?></td>
        <td><?php echo $mascota['color']; ?></td>
        <td><?php echo $mascota['peso']; ?></td>
        <td><?php echo $mascota['altura']; ?></td>
        <td><?php echo $mascota['edad']; ?></td>
    </tr>
</table>