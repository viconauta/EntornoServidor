<?php
require_once '../ej1/conexion.php';

try {
    $stmt = $db->prepare('
        delete from matriculas where dni = ? and codigo = ? and anio = ?;
    ');

    $dni = '77777777A';
    $codigo = 1;
    $anio = 2026;
    $stmt->bind_param('sii', $dni, $codigo, $anio);
    $stmt->execute();

    if($stmt->affected_rows === 0) {
        echo '<br>No encontrada.';
    } else {
        echo '<br>Matricula eliminada.';
    }

    $stmt->close();
    $db->close();

} catch(mysqli_sql_exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operacion.');
}
?>