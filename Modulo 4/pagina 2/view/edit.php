<!DOCTYPE html>
<html>
<head>
    <title>Editar Noticia</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .container h1 {
            margin-top: 0;
        }

        form {
            text-align: left;
            width: 100%;
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="date"] {
            padding: 6px;
        }

        textarea {
            resize: vertical;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Noticia</h1>

        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "Francisco1234";
        $password = "1234";
        $database = "validar";
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificaro la conexión
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Obtengo el ID de la noticia a editar
        $id = $_GET["id"];

        // Obtengo los datos de la noticia de la base de datos
        $sql = "SELECT * FROM noticias WHERE id_noticias='$id'";
        $result = $conn->query($sql);

        // Muestro el formulario de edición con los datos de la noticia
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>

            <!-- Formulario para editar la noticia seleccionada por el usuario -->
            <form action="update_process.php" method="post" enctype="multipart/form-data">
                <!-- Campo oculto para enviar el ID de la noticia a actualizar, el usuario no conoce el id_noticias -->
                <input type="hidden" name="id" value="<?php echo $row['id_noticias']; ?>">

                <!-- Campo para editar la fecha de la noticia -->
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" value="<?php echo $row['fecha_noticias']; ?>" required><br><br>

                <!-- Campo para editar el titular de la noticia -->
                <label for="titular">Titular:</label>
                <input type="text" name="titular" id="titular" value="<?php echo $row['titular_noticia']; ?>" required><br><br>

                <!-- Campo para editar la descripción de la noticia -->
                <label for="descripcion">Descripción:</label><br>
                <textarea name="descripcion" id="descripcion" rows="8" required style="width: 100%;"><?php echo $row['descripcion_noticia']; ?></textarea><br><br>

                <!-- Campo para cargar una nueva imagen relacionada con la noticia (opcional) -->
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen" accept="image/*"><br><br>

                <!-- Botón de envío para actualizar la noticia -->
                <input type="submit" value="Actualizar Noticia">
            </form>

            <?php
        } else {
            // Si no se encontró la noticia, mostrar un mensaje de error
            echo "No se encontró la noticia.";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </div>
</body>
</html>

<!-- Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4. -->