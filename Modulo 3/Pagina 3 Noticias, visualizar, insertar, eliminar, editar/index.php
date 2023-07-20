<!DOCTYPE html>
<html>
<head>
    <title>Noticias</title>
    <style>
        /* Estilos CSS para centrar el contenido en la página */
        body {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            background-color: #E5DEDD; /* Cambia el color de fondo a tu preferencia */
        }

        /* Estilos para el contenido de la página */
        .content {
            margin-top: auto;
            text-align: center;
        }

        /* Estilos para las imágenes */
        img {
            max-width: 400px; /* Ancho máximo deseado para las imágenes */
            height: auto;
            margin-top: 10px;
        }

        /* Estilos para la descripción de las noticias */
        .description {
            text-align: justify;
            margin: 0 20px; /* Ajusta el valor según tu preferencia */
        }
    </style>
</head>
<body>
    <!-- Título de la página principal -->
    <h1>Noticias</h1>

    <!-- Contenedor para mostrar las noticias -->
    <div class="content">
        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "Francisco1234";
        $password = "1234";
        $database = "validar";
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Obtener las noticias de la base de datos, ordenadas por ID descendente, para que salga la ultima noticia ingresada en primera posicion.
        $sql = "SELECT * FROM noticias ORDER BY id_noticias DESC";
        $result = $conn->query($sql);

        // Mostrar las noticias
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Mostrar el titular de la noticia
                echo "<h2>" . $row["titular_noticia"] . "</h2>";

                // Mostrar la fecha de la noticia
                echo "<p><strong>Fecha:</strong> " . $row["fecha_noticias"] . "</p>";

                // Mostrar la descripción de la noticia
                echo "<p class='description'>" . $row["descripcion_noticia"] . "</p>";

                // Mostrar la imagen de la noticia
                echo '<img src="' . $row["imagen_ruta"] . '"/>';

                // Separador entre noticias
                echo "<hr>";
            }
        } else {
            // Si no hay noticias disponibles, mostrar un mensaje
            echo "No hay noticias disponibles.";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </div>

    <!-- agrego enlace para administrar las noticias -->
    <a href="admin.php">Administrar noticias</a>
</body>
</html>
