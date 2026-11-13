<?php
require_once '../ej1/conexion.php';

try {
    $stmt = $db->prepare('
        insert into alumnos (dni, nombre, edad) values
        (?, ?, ?);
    ');

    $dni = "77777777A";
    $nombre = "Ana Martín";
    $edad = 20;

    $stmt->bind_param('ssi', $dni, $nombre, $edad);
    $stmt->execute();
    
    echo '<br>Alumnos insertados: ' . $stmt->affected_rows;
    $stmt->close();
    $db->close();
} catch(mysqli_sql_exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operacion.');
}
?>