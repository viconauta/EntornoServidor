<?php
require_once '../ej1/conexion.php';

try {
    $stmt = $db->prepare(
        'select nombre, edad from alumnos where edad = ? or edad = ?'
    );
    $edad1 = 21;
    $edad2 = 24;
    $stmt->bind_param('ii', $edad1, $edad2);
    $stmt->execute();
    
    $respuesta = $stmt->get_result();
    echo '<br>Coincidencias: ' . $respuesta->num_rows;
    echo '<table><tr><th>Nombre</th><th>Edad</th></tr>';
    while($fila = $respuesta->fetch_assoc()) {
        $nombre = htmlspecialchars($fila['nombre'], ENT_QUOTES, 'utf-8');
        $edad = (int) $fila['edad'];
        echo '<tr><td> ' . $nombre . '</td><td>' . $edad . '</td></tr>';
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