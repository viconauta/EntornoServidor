<?php
require_once '../ej1/conexion.php';

try {
    $resultado = $db->query('select nombre, edad from alumnos');
    echo '<br>Alumnos: ' . $resultado->num_rows;
    echo '<table><tr><th>Nombre</th><th>DNI</th></tr>';
    while($fila = $resultado->fetch_assoc()) {
        $nombre = htmlspecialchars($fila['nombre'], ENT_QUOTES, 'utf-8');
        $edad = (int) $fila['edad'];
        echo '<tr><td>' . $nombre . '</td><td>' . $edad . '</td></tr>';
    }
    $resultado->free();
    $db->close();
} catch (mysqli_sql_exception $e) {
    erro_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operacion.');
}
?>