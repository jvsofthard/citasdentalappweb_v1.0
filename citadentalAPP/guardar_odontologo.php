<?php
// Conexión a la base de datos
// Reemplaza los valores según tu configuración
$servername = "localhost";
$username = "root";
$password = "";
$database = "dental_app";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$especialidad = $_POST['especialidad'];

// Insertar nuevo odontólogo en la base de datos
$sql = "INSERT INTO odontologos (nombre, especialidad) VALUES ('$nombre', '$especialidad')";

if ($conn->query($sql) === TRUE) {
    echo "Odontólogo agregado correctamente.";
} else {
    echo "Error al agregar odontólogo: " . $conn->error;
}
// Redirigir a la página anterior con un mensaje de éxito
header("Location: odontologos.php?exito=1");
exit(); // Asegura que el script se detenga aquí
?>
// Cerrar conexión
$conn->close();
?>
