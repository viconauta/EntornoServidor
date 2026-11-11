<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $db = new mysqli('localhost', 'user', 'clave', 'centro');
        $db->set_charset('utf8mb4');
        echo "Conexion correcta";
    } catch(mysqli_sql_exception $e) {
        error_log($e->getMessage());
        http_response_code(500);
        exit("No se pudo completar la operacion.");
    }
?>