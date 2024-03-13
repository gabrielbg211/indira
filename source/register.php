<?php
// Datos de conexión a la base de datos
$servername = "roundhouse.proxy.rlwy.net";
$username = "root";
$password = "sOJJgkBrcvbeZdslRgSmRsFIGRazATQE";
$database = "railway";
$port = 40581;

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password']; // Se cambió el nombre del campo

// Preparar la consulta SQL para insertar un nuevo usuario
$sql = "INSERT INTO usuarios (nombre, apellido, email, username, password) VALUES ('$nombre', '$apellido', '$email', '$username', '$password')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. ¡Bienvenido!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
