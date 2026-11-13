<?php
require_once '../ej1/conexion.php';

try {
    $stmt = $db->prepare('
        select a.nombre as alumno, asig.nombre as asignatura, m.nota
        from matriculas m
            join alumnos a on m.dni = a.dni
            join asignaturas asig on m.codigo = asig.codigo
        where m.anio = ?;
    ');

    $anio = 2026;
    $stmt->bind_param('i', $anio);
    $stmt->execute();
    $resultado = $stmt->get_result();

    echo '<br>Coincidencias año ' . $anio . ': ' . $resultado->num_rows;
    while($fila = $resultado->fetch_assoc()) {
        $alumno = htmlspecialchars($fila['alumno'], ENT_QUOTES, 'utf-8');
        $asignatura = htmlspecialchars($fila['asignatura'], ENT_QUOTES, 'utf-8');
        if($fila['nota'] === null) {
            $nota = 'Pendiente';
        } else {
            $nota = (float) $fila['nota'];
        }
        
        echo '<br>Alumno: ' . $alumno;
        echo '<br>Asignatura: ' . $asignatura;
        echo '<br>Nota: ' . $nota;
        echo '<hr>';
    }

    $resultado->free();
    $stmt->close();
    $db->close();
} catch(mysqli_sql_exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operacion.');
}
?>