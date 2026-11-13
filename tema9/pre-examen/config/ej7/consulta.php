<?php
require_once '../ej1/conexion.php';

try {
    $stmt = $db->prepare('
        select a.nombre as alumno, asig.nombre as asignatura, m.anio, m.nota
        from alumnos a
            join matriculas m on a.dni = m.dni
            join asignaturas asig on asig.codigo = m.codigo
        where m.nota >= ?
        order by m.nota desc;
    ');

    $notaMinima = 5;
    $stmt->bind_param('i', $notaMinima);
    $stmt->execute();
    $respuesta = $stmt->get_result();

    echo '<br>Coincidencias: ' . $respuesta->num_rows;
    while($fila = $respuesta->fetch_assoc()) {
        $alumno = htmlspecialchars($fila['alumno'], ENT_QUOTES, 'utf-8');
        $asignatura = htmlspecialchars($fila['asignatura'], ENT_QUOTES, 'utf-8');
        $anio = (int) $fila['anio'];
        $nota = (float) $fila['nota'];
        
        echo '<br>---- ' . $alumno . ' ----';
        echo '<br>Asignatura: ' . $asignatura;
        echo '<br>Año: ' . $anio;
        echo '<br>Nota: ' . $nota;
        echo '<hr>';
    }

    $respuesta->free();
    $stmt->close();
    $db->close();

} catch (mysqli_sql_exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operacion.');
}
?>