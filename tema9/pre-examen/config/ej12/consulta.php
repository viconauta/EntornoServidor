<?php
require_once '../ej1/conexion.php';

try {
    $stmt = $db->prepare('
        update matriculas set nota = ? where dni = ? and codigo = ? and anio = ?;
    ');

    $dni = '77777777A';
    $codigo = 1;
    $anio = 2026;
    $nuevaNota = 8.25;

    $stmt->bind_param('dsii', $nuevaNota, $dni, $codigo, $anio);
    $stmt->execute();

    echo '<br>Nota actualizada: ' . $stmt->affected_rows;
    $stmt->close();
    $db->close();

} catch(mysqli_sql_exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operacion.');
}
?>