<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="estilos/styles.css">
</head>
<body>
    <!-- Botón "Volver a Inicio" fuera de las divisiones -->
    <a href="index.php"><button>Volver a Inicio</button></a>

    <div id="loginSection">
        <h2>Login</h2>
        <form action="source/login.php" method="post">
            <input type="text" name="identifier" placeholder="Usuario o Correo Electrónico" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit">Iniciar sesión</button>
        </form>
        <button onclick="toggleForm('register')">Registrarse</button>
    </div>

    <div id="registerSection" class="hidden">
        <h2>Registro</h2>
        <form action="source/register.php" method="post">
            <input type="text" name="username" placeholder="Usuario" required><br>
            <input type="email" name="email" placeholder="Correo electrónico" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit">Registrarse</button>
        </form>
        <button onclick="toggleForm('login')">Volver al Login</button>
    </div>

    <script src="scripts/script.js"></script>
</body>
</html>
