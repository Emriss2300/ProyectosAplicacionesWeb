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
        }

        .container {
            text-align: center;
        }

        form {
            text-align: center;
            width: 80%;
            margin: 0 auto;
        }

        textarea {
            width: 100%;
            resize: vertical;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Noticia</h1>

        <?php
        // Establecer la conexión a la base de datos
        $servername = "localhost";
        $username = "Francisco1234";
        $password = "1234";
        $database = "validar";
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Obtener el ID de la noticia a editar
        $id = $_GET["id"];

        // Obtener los datos de la noticia de la base de datos
        $sql = "SELECT * FROM noticias WHERE id_noticias='$id'";
        $result = $conn->query($sql);

        // Mostrar el formulario de edición con los datos de la noticia
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>

            <form action="update_process.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id_noticias']; ?>">

                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" value="<?php echo $row['fecha_noticias']; ?>" required><br><br>

                <label for="titular">Titular:</label>
                <input type="text" name="titular" id="titular" value="<?php echo $row['titular_noticia']; ?>" required><br><br>

                <label for="descripcion">Descripción:</label><br>
                <textarea name="descripcion" id="descripcion" rows="8" required style="width: 100%;"><?php echo $row['descripcion_noticia']; ?></textarea><br><br>

                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen" accept="image/*"><br><br>

                <input type="submit" value="Actualizar Noticia">
            </form>

            <?php
        } else {
            echo "No se encontró la noticia.";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </div>
</body>
</html>
