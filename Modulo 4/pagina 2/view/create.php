<!DOCTYPE html>
<html>
<head>
    <title>Crear Noticia</title>
    <style>
        /* Estilos CSS para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }

        /* Estilos para el contenedor principal */
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 90%;
        }

        /* Estilos para el título de la página */
        h1 {
            text-align: center;
            color: #0056b3;
        }

        /* Estilos para el formulario */
        form {
            text-align: left;
            margin-top: 20px;
        }

        /* Estilos para las etiquetas de los campos */
        label {
            font-weight: bold;
        }

        /* Estilos para los campos del formulario */
        input[type="date"],
        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        /* Estilos para el botón de envío del formulario */
        input[type="submit"] {
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Estilos para el botón de envío del formulario al pasar el mouse */
        input[type="submit"]:hover {
            background-color: #003a80;
        }

        /* Estilos para el botón de volver */
        .back-btn {
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        /* Estilos para el botón de volver al pasar el mouse */
        .back-btn:hover {
            background-color: #003a80;
        }
    </style>
</head>
<body>
    <!-- Agrego un enlace para volver a la página de administración -->
    <a href="admin.php" class="back-btn">Volver</a>

    <!-- El formulario para crear una nueva noticia -->
    <div class="container">
        <!-- Título "Crear Noticia" -->
        <h1>Crear Noticia</h1>

        <!-- El formulario inicia con el atributo "action" que indica a dónde se enviarán los datos cuando se envíe el formulario y el método "post" para enviar los datos de manera segura. También se incluye el atributo "enctype" para permitir el envío de archivos. -->
        <form action="create_process.php" method="post" enctype="multipart/form-data">
            <!-- Campos del formulario: fecha, titular, descripción e imagen -->

            <!-- Etiqueta y campo para la fecha -->
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required>

            <!-- Etiqueta y campo para el titular -->
            <label for="titular">Titular:</label>
            <input type="text" name="titular" id="titular" required>

            <!-- Etiqueta y campo para la descripción -->
            <label for="descripcion">Descripción:</label><br>
            <textarea name="descripcion" id="descripcion" rows="5" required></textarea>

            <!-- Etiqueta y campo para la imagen -->
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" required>

            <!-- Botón para enviar el formulario -->
            <input type="submit" value="Crear Noticia">
        </form>
    </div>
</body>
</html>

<!-- Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4. -->