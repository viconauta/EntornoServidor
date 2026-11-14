<?php
require_once '../ej1/conexion.php';
try {
    $stmt = $db->prepare('
        select a.nombre as alumno, asig.nombre as asignatura, m.anio, m.nota
        from matriculas m
            join alumnos a on a.dni = m.dni
            join asignaturas asig on asig.codigo = m.codigo
        where m.dni = ?
        order by m.anio desc, asig.nombre;
    ');
    
    $dni = '22222222B';
    $stmt->bind_param('s', $dni);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    echo '<br>Coincidencias: ' . $resultado->num_rows;
    while($fila = $resultado ->fetch_assoc()) {
        $nombre = htmlspecialchars($fila['alumno'], ENT_QUOTES, 'utf-8');
        $asig = htmlspecialchars($fila['asignatura'], ENT_QUOTES, 'utf-8');
        $nota = (float) $fila['nota'];
        $anio = (int) $fila['anio'];

        echo '<hr> ---- ' . $nombre . ' ----';
        echo '<br>Asignatura: ' . $asig;
        echo '<br>Año: ' . $anio;
        echo '<br>Nota: ' . $nota;
    }

    $resultado->free();
    $stmt->close();
    $db->close();

} catch(mysqli_sql_exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la opercion.');
}

?>