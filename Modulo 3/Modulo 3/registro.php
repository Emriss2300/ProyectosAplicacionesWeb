<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>

    <form action="guardar_usuario.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>

        <br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <br><br>
        
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
