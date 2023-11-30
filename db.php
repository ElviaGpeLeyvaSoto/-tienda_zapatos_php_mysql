<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "nombre_tienda";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
