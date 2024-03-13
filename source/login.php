<?php
session_start();

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
$identifier = $_POST['identifier']; // Puede ser el nombre de usuario o correo electrónico
$password = $_POST['password'];

// Consulta SQL para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE (username='$identifier' OR email='$identifier') AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso
    $_SESSION['username'] = $result->fetch_assoc()['username'];
    header("Location: ../index.php"); // Redirige a la página de inicio
} else {
    // Error de credenciales
    echo "Nombre de usuario o contraseña incorrectos.";
}

// Cerrar la conexión
$conn->close();
