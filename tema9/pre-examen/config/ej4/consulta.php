<?php
require_once '../ej1/conexion.php';
try {
    $stmt = $db->prepare(
        'select nombre, edad from alumnos where edad < ? order by edad asc, nombre'
    );
    $limite = 22;
    $stmt->bind_param('i', $limite);
    $stmt->execute();
    $resultado = $stmt->get_result();

    echo '<br>Coincidencias: ' . $resultado->num_rows . '<br>';
    echo '<table><tr><th>Nombre</th><th>Edad</th></tr>';
    while($fila = $resultado->fetch_assoc()) {
        $nombre = htmlspecialchars($fila['nombre'], ENT_QUOTES, 'utf-8');
        $edad = (int) $fila['edad'];
        echo '<tr><td> ' . $nombre . '</td><td>' . $edad . '</td></tr>';
    }
    $resultado->free();
    $stmt->close();
} catch(mysqli_sql_exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operacion.');
}
?>