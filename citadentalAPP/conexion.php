<?php
$servername = "localhost";
$username = "Nombre_Usuario";
$password = "Contraseña";
$database = "Nombre_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
