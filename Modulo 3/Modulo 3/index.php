<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hueyel Chile Online</title>
    <link rel="icon" href="escudo.png">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background-image: url('imagendefondo1.jpg');
            background-size: cover;
            background-position: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h1, h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1> Bienvenido a Hueyel Chile Online </h1>

    <h3>Ingrese sus Datos de Identificación</h3>

    <form action="login.php" method="POST">

        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>

        <br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <br><br>
        
        <input type="submit" value="Iniciar sesión">

    </form>

    <?php
    // Verificar si se recibió el parámetro de error
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        // Mostrar el mensaje de error
        echo "<p style='color: red;'>Usuario o contraseña incorrectos. Por favor, verifícalos y vuelve a intentarlo.</p>";
    }
    ?>

    <br>
    <a href="registro.php">Registrarse</a>

</body>
</html>
