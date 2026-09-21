<?php
    $pos[0] = 10;
    $pos[1] = 15;
    $pos[2] = 20;
    $pos[3] = $pos[0] + $pos[1];
    $pos[4] = $pos[1] * $pos[2];
    $pos[5] = $pos[0] / $pos[2];
    $pos[6] = $pos[0] + $pos[1] + $pos[2];
    $pos[7] = ($pos[1] + $pos[2]) / $pos[0];
?>

<table border = "1">
    <tr align = "center">
        <td>"Posicion 0"</td>
        <td><?php echo $pos[0]; ?></td>
    </tr>
    <tr align = "center">
        <td>"Posicion 1"</td>
        <td><?php echo $pos[1]; ?></td>
    </tr>
    <tr align = "center">
        <td>"Posicion 2"</td>
        <td><?php echo $pos[2]; ?></td>
    </tr>
    <tr align = "center">
        <td>"Posicion 3"</td>
        <td><?php echo $pos[3]; ?></td>
    </tr>
    <tr align = "center">
        <td>"Posicion 4"</td>
        <td><?php echo $pos[4]; ?></td>
    </tr>
    <tr align = "center">
        <td>"Posicion 5"</td>
        <td><?php echo $pos[5]; ?></td>
    </tr>
    <tr align = "center">
        <td>"Posicion 6"</td>
        <td><?php echo $pos[6]; ?></td>
    </tr>
    <tr align = "center">
        <td>"Posicion 7"</td>
        <td><?php echo $pos[7]; ?></td>
    </tr>
</table>

