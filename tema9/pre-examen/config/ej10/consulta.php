<?php
require_once '../ej1/conexion.php';

try {
    $stmt = $db->prepare('
        update alumnos set edad = ? where dni = ?;
    ');

    $dni = '77777777A';
    $edad = 21;

    $stmt->bind_param('is', $edad, $dni);
    $stmt->execute();

    echo '<br>Modificados: ' . $stmt->affected_rows;
    $stmt->close();
    $db->close();

} catch(mysqli_sql_exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operaidion.');
}
?>