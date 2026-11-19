<?php
header("Content-Type: text/html; charset=utf-8");
if($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Envia el formulario");
}
$entrada = $_POST["numero"] ?? "";
$numero = is_string($entrada)
    ? filter_var($entrada, FILTER_VALIDATE_INT)
    : false;

echo "<h1>Tabla del " . $numero . "</h1>";

for($i = 0; $i <= 10; $i++) {
    echo "<p> " . $numero . " x " . $i . " = " . ($numero * $i) . "</p>";
}
?>