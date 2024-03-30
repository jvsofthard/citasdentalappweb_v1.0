<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Odontólogo</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Agregar Odontólogo</h2>
    <form action="guardar_odontologo.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="especialidad">Especialidad:</label>
        <input type="text" id="especialidad" name="especialidad" required>
        <br>
        <button type="submit">Guardar Odontólogo</button>
    </form>
</body>
</html>
