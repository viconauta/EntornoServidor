<?php
require_once '../ej1/conexion.php';

try {
    $stmt = $db->prepare(
        'select nombre from alumnos where nombre like ?'
    );
    $texto = 'lo';
    $comodines = '%' . $texto . '%';

    $stmt->bind_param('s', $comodines);
    $stmt->execute();
    $respuesta = $stmt->get_result();

    if($respuesta->num_rows === 0) {
        echo '<br>No hay coincidencias';
    } else {
        echo '<br>Coincidencias: ' . $respuesta->num_rows;
        while($fila = $respuesta->fetch_assoc()) {
            $nombre = htmlspecialchars($fila['nombre'], ENT_QUOTES, 'utf-8');
            echo '<br>Nombre: ' . $nombre;
        }
    }

    $respuesta->free();
    $stmt->close();
    $db->close();

} catch(mysqli_sql_exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operacion.');
}
?>