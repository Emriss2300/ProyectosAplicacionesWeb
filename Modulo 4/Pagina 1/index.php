<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hueyel Chile Online</title>
    <link rel="icon" href="escudo.png">
    <style>
        /* Estilos de la página */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background-image: url('vista/imagenes/imagendefondo1.jpg');
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
    <!-- Título principal de la página -->
    <h1> Bienvenido a Hueyel Chile Online </h1>

    <!-- Encabezado para el formulario de inicio de sesión -->
    <h3>Ingrese sus Datos de Identificación</h3>

    <!-- Formulario para el inicio de sesión -->
    <form action="controller.php" method="POST">

        <label for="usuario">Usuario:</label>
        <!-- Campo de entrada de texto para el nombre de usuario, requerido para el inicio de sesión -->
        <input type="text" name="usuario" id="usuario" required>

        <br><br>
        
        <label for="password">Contraseña:</label>
        <!-- Campo de entrada de contraseña, requerido para el inicio de sesión -->
        <input type="password" name="password" id="password" required>

        <br><br>
        
        <input type="submit" value="Iniciar sesión">
        <!-- Botón para enviar el formulario y realizar el inicio de sesión -->

    </form>

    <?php
    // Verificar si se recibió el parámetro de error
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        // Mostrar el mensaje de error si el inicio de sesión fue incorrecto
        echo "<p style='color: red;'>Usuario o contraseña incorrectos. Por favor, verifícalos y vuelve a intentarlo.</p>";
    }
    ?>

    <br>
    <!-- Enlace para redirigir al usuario a la página de registro -->
    <a href="registro.php">Registrarse</a>

</body>
</html>

<!--Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4.-->