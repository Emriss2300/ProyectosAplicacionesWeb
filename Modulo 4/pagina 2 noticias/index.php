<!DOCTYPE html>
<html>
<head>
    <title>Noticias</title>
    <style>
        /* Estilos CSS para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2; /* Cambia el color de fondo a tu preferencia */
        }

        /* Estilos para el contenedor principal */
        .container {
            max-width: 800px;
            width: 100%;
            position: relative; /* Añadimos posicionamiento relativo para el contenedor principal */
        }

        /* Estilos para el título de la página principal */
        h1 {
            font-size: 36px;
            text-align: center;
            color: #0056b3;
            margin-bottom: 20px; /* Espacio entre el título y el contenido */
        }

        /* Estilos para cada noticia */
        .news-item {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para el titular de la noticia */
        .news-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #0056b3;
        }

        /* Estilos para la fecha de la noticia */
        .news-date {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }

        /* Estilos para la descripción de la noticia */
        .news-description {
            text-align: justify;
            margin-bottom: 20px;
        }

        /* Estilos para las imágenes */
        .news-image {
            max-width: 100%;
            height: auto;
            margin: 0 auto;
            display: block;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para el botón de administrar noticias */
        .admin-btn {
            font-size: 16px;
            color: #fff;
            background-color: #0056b3;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            position: absolute; /* Añadimos posicionamiento absoluto */
            top: 20px; /* Colocamos el botón 20px desde la parte superior */
            right: 20px; /* Colocamos el botón 20px desde la parte derecha */
        }

        /* Estilos para el botón de administrar noticias al pasar el mouse */
        .admin-btn:hover {
            background-color: #003a80;
        }
    </style>
</head>
<body>
    <div class="container">
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
                    echo '<div class="news-item">'; // Inicio del contenedor de la noticia
                    // Mostrar el titular de la noticia
                    echo '<h2 class="news-title">' . $row["titular_noticia"] . '</h2>';

                    // Mostrar la fecha de la noticia
                    echo '<p class="news-date"><strong>Fecha:</strong> ' . $row["fecha_noticias"] . '</p>';

                    // Mostrar la descripción de la noticia
                    echo '<p class="news-description">' . $row["descripcion_noticia"] . '</p>';

                    // Mostrar la imagen de la noticia desde la carpeta images dentro de la carpeta view
                    echo '<img class="news-image" src="view/' . $row["imagen_ruta"] . '" alt="Imagen de la noticia">';

                    echo '</div>'; // Cierre del contenedor de la noticia
                }
            } else {
                // Si no hay noticias disponibles, mostrar un mensaje
                echo "<p>No hay noticias disponibles.</p>";
            }

            // Cerrar la conexión
            $conn->close();
            ?>
        </div>
    </div>

    <!-- Botón para administrar las noticias -->
    <a href="view/admin.php" class="admin-btn">Administrar Noticias</a>
</body>
</html>
