<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000000;
            color: #ffffff;
        }

        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        #content {
            text-align: center;
        }

        form {
            display: inline-block;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
        }

        label {
            color: #000000;
        }
    </style>
</head>
<body>
    <div id="video-background">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/H73FGdfjH0w?autoplay=1&controls=0&loop=1&mute=1&playlist=H73FGdfjH0w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id="content">
        <h1 style="color: #ffffff;">Registro de Usuario</h1>

        <?php
        $registroExitoso = false;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verificar si se recibieron los datos del formulario de registro
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];

            // Configuración de la conexión a la base de datos
            $servername = "localhost"; // Cambia esto si tu base de datos está en otro servidor
            $username = "Francisco1234";
            $dbpassword = "1234"; // Cambia esto si la contraseña de tu base de datos es diferente
            $dbname = "validar"; // Nombre de tu base de datos

            // Crear la conexión a la base de datos
            $conn = new mysqli($servername, $username, $dbpassword, $dbname);

            // Verificar si la conexión fue exitosa
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Consulta SQL para verificar si el usuario ya existe en la base de datos
            $sql = "SELECT * FROM usuario WHERE usuario = '$usuario'";
            $result = $conn->query($sql);

            // Verificar si se encontró un registro con el mismo usuario en la base de datos
            if ($result->num_rows > 0) {
                // El usuario ya existe, mostrar un mensaje de error
                echo "<p style='color: red;'>El usuario ya está registrado. Por favor, elige otro nombre de usuario.</p>";
            } else {
                // El usuario no existe, guardar la información en la base de datos
                $sql = "INSERT INTO usuario (usuario, password) VALUES ('$usuario', '$password')";
                if ($conn->query($sql) === TRUE) {
                    // El usuario se guardó correctamente
                    $registroExitoso = true;
                } else {
                    // Hubo un error al guardar el usuario, mostrar un mensaje de error
                    echo "Error al guardar el usuario: " . $conn->error;
                }
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
        }
        ?>

        <?php if ($registroExitoso): ?>
            <?php
            $tiempoRedireccion = 3; // Tiempo en segundos antes de redirigir
            echo "<p style='color: green;'>Registro exitoso. Serás redirigido a la página de inicio en $tiempoRedireccion segundos.</p>";
            header("Refresh: $tiempoRedireccion; URL=index.php");
            exit();
            ?>
        <?php else: ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="usuario" style="color: #000000;">Usuario:</label>
                <input type="text" name="usuario" id="usuario" required>

                <br><br>
                
                <label for="password" style="color: #000000;">Contraseña:</label>
                <input type="password" name="password" id="password" required>

                <br><br>
                
                <input type="submit" value="Registrarse">
            </form>
        <?php endif; ?>
    </div>
</body>
</html>

