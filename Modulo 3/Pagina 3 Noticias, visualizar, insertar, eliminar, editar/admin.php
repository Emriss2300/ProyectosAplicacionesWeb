<!DOCTYPE html>
<html>
<head>
    <title>Administración de Noticias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9; /* Color de fondo deseado */
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            text-align: center; /* Centrar los títulos de tabla */
        }

        img {
            max-width: 100px;
            height: auto;
        }

        .actions {
            white-space: nowrap;
        }

        .create-news-link {
            display: block;
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
        }

        .edit-news-link {
            display: inline-block;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>Administración de Noticias</h1>

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

    // Obtener las noticias de la base de datos
    $sql = "SELECT * FROM noticias";
    $result = $conn->query($sql);

    // Mostrar las noticias en una tabla
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Fecha</th><th>Titular</th><th>Descripción</th><th>Imagen</th><th>Acciones</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["fecha_noticias"] . "</td>";
            echo "<td>" . $row["titular_noticia"] . "</td>";
            echo "<td>" . $row["descripcion_noticia"] . "</td>";
            echo '<td><img src="' . $row["imagen_ruta"] . '"/></td>';
            echo '<td class="actions">';
            echo '<a href="edit.php?id=' . $row["id_noticias"] . '" class="edit-news-link">Editar</a>';
            echo '<a href="delete.php?id=' . $row["id_noticias"] . '">Eliminar</a>';
            echo '</td>';
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay noticias disponibles.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>

    <a href="create.php" class="create-news-link">Crear nueva noticia</a>
</body>
</html>
