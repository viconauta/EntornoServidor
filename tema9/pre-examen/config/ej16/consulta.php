<?php
require_once '../ej1/conexion.php';

try {
    $nombre = $_GET['nombre'] ?? '';
    if(!is_string($nombre) || trim($nombre) === '') {
        http_response_code(400);
        exit('Escribe un nombre');
    }

    $stmt = $db->prepare('
        select dni, nombre from alumnos where nombre like ?;
    ');

    $nombre = trim($nombre);
    $comodin = '%' . $nombre . '%';
    $stmt->bind_param('s', $comodin);
    $stmt->execute();
    
    $respuesta = $stmt->get_result();
    echo '<br>Coincidencias: ' . $respuesta->num_rows;

    while($fila = $respuesta->fetch_assoc()) {
        $dni = htmlspecialchars($fila['dni'], ENT_QUOTES, 'utf-8');
        $nom = htmlspecialchars($fila['nombre'], ENT_QUOTES, 'utf-8');

        echo '<br>Dni: ' . $dni;
        echo '<br>Nombre: ' . $nom . '<hr>';
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