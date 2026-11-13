<?php
require '../ej1/conexion.php';

try {
    $stmt = $db->prepare('
        insert into matriculas (dni, codigo, anio, nota) values (?, ?, ?, ?);
    ');

    $dni = '77777777A';
    $codigo = 1;
    $anio = 2026;
    $nota = 7.5;

    $stmt->bind_param('siid', $dni, $codigo, $anio, $nota);
    $stmt->execute();

    echo '<br>Matricula insertada: ' . $stmt->affected_rows;
    $stmt->close();
    $db->close();
    
} catch(mysqli_sql_exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operacion.');
}
?>