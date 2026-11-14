<?php
require_once '../ej1/conexion.php';

try {
    $db->begin_transaction();
    
    $insertAlumno = $db->prepare('
        insert into alumnos (dni, nombre, edad) values (?, ?, ?);
    ');
    
    $dni = '99999999Z';
    $nombre = 'Jose Perez';
    $edad = 15;
    
    $insertAlumno->bind_param('ssi', $dni, $nombre, $edad);
    $insertAlumno->execute();
    
    if($insertAlumno->affected_rows !== 0) {
        echo '<br>El alumno se inserto correctamente.';
        }
    $insertAlumno->close();

    $insertMatricula = $db->prepare('
    insert into matriculas (dni, codigo, anio, nota) values (?, ?, ?, ?);
    ');

    $nota = 5.2;
    $codigo = 1;
    $anio = 2020;

    $insertMatricula->bind_param('siid', $dni, $codigo, $anio, $nota);
    $insertMatricula->execute();
    
    if($insertMatricula->affected_rows !== 0) {
        echo '<br>La matricula se creo correctamente';
        }
    $insertMatricula->close();

    $db->commit();
    $db->close();

} catch(mysqli_sql_exception $e) {
    $db->rollback();
    error_log($e->getMessage());
    http_response_code(500);
    exit('No se pudo completar la operacion.');
}
?>