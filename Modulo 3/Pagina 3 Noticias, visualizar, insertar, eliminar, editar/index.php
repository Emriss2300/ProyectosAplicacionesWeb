<!DOCTYPE html>
<html>
<head>
    <title>Noticias</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
        }

        .content {
            margin-top: auto;
            text-align: center;
        }

        body {
            background-color: #E5DEDD; /* Cambia el color de fondo a tu preferencia */
        }

        img {
            max-width: 400px; /* Ancho máximo deseado para las imágenes */
            height: auto;
            margin-top: 10px;
        }

        .description {
            text-align: justify;
            margin: 0 20px; /* Ajusta el valor según tu preferencia */
        }

    </style>
</head>
<body>
    <h1>Noticias</h1>

    <div class="content">
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

        // Obtener las noticias de la base de datos, ordenadas por ID descendente
        $sql = "SELECT * FROM noticias ORDER BY id_noticias DESC";
        $result = $conn->query($sql);

        // Mostrar las noticias
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h2>" . $row["titular_noticia"] . "</h2>";
                echo "<p><strong>Fecha:</strong> " . $row["fecha_noticias"] . "</p>";
                echo "<p class='description'>" . $row["descripcion_noticia"] . "</p>";
                echo '<img src="' . $row["imagen_ruta"] . '"/>';
                echo "<hr>";
            }
        } else {
            echo "No hay noticias disponibles.";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </div>

    <a href="admin.php">Administrar noticias</a>
</body>
</html>
