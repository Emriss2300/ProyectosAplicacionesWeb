<!DOCTYPE html>
<html>
<head>
    <title>Administración de Noticias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #0056b3;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }

        .actions {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .actions a {
            display: block;
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .edit-news-link {
            background-color: #4CAF50;
        }

        .edit-news-link:hover {
            background-color: #45a049;
        }

        .delete-news-link {
            background-color: #f44336;
        }

        .delete-news-link:hover {
            background-color: #d32f2f;
        }

        .create-news-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            background-color: #0056b3;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .create-news-btn:hover {
            background-color: #003a80;
        }

        .back-btn {
            display: block;
            text-align: center;
            margin: 20px;
            background-color: #0056b3;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .back-btn:hover {
            background-color: #003a80;
        }

        .content-container {
            padding-top: 120px;
            padding-bottom: 20px;
            position: relative;
        }
    </style>
</head>
<body>
    <h1>Administración de Noticias</h1>

    <div class="content-container">
        <a href="index.php" class="back-btn">Volver</a> <!-- Agrego un enlace para volver a la página de noticias -->

        <?php
        // Establesco la conexión a la base de datos, en todos mis codigos uso la misma base con clave se usuario. 
        $servername = "localhost";
        $username = "Francisco1234";
        $password = "1234";
        $database = "validar";
        $conn = new mysqli($servername, $username, $password, $database);

        // Verifico la conexión con mi base de datos 
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Obtengo las noticias de la base de datos, en mi tabla noticias.
        $sql = "SELECT * FROM noticias";
        $result = $conn->query($sql);

        // Muestro las noticias almacenadas en mi tabla de la BD. 
        if ($result->num_rows > 0) {
            echo "<table>"; // Comienzo a mostrar una tabla HTML para las noticias
            echo "<tr><th>Fecha</th><th>Titular</th><th>Descripción</th><th>Imagen</th><th>Acciones</th></tr>"; // Agrego encabezados a la tabla
            while ($row = $result->fetch_assoc()) { // Itero sobre cada fila de noticias obtenidas de la base de datos
                echo "<tr>"; // Comienzo una fila de la tabla para mostrar una noticia
                echo "<td>" . $row["fecha_noticias"] . "</td>"; // Muestro la fecha de la noticia en una celda de la tabla
                echo "<td>" . $row["titular_noticia"] . "</td>"; // Muestro el titular de la noticia en una celda de la tabla
                echo "<td>" . $row["descripcion_noticia"] . "</td>"; // Muestro la descripción de la noticia en una celda de la tabla
                echo '<td><img src="' . $row["imagen_ruta"] . '"/></td>'; // Muestro la imagen de la noticia en una celda de la tabla
                echo '<td class="actions">'; // Comienzo una celda para las acciones (editar y eliminar) de la noticia
                echo '<a href="edit.php?id=' . $row["id_noticias"] . '" class="edit-news-link">Editar</a>'; // Agrego un enlace para editar la noticia
                echo '<a href="delete.php?id=' . $row["id_noticias"] . '" class="delete-news-link">Eliminar</a>'; // Agrego un enlace para eliminar la noticia
                echo '</td>'; // Cierro la celda de acciones
                echo "</tr>"; // Cierro la fila de la tabla
            }
            echo "</table>"; // Cierro la tabla
        } else {
            echo "No hay noticias disponibles."; // Muestro un mensaje si no hay noticias en la base de datos o si no se ha agregado ninguna todavía.
        }

        // Cerrar la conexión con la base.
        $conn->close(); 
        ?>

        <a href="create.php" class="create-news-btn">Crear nueva noticia</a> <!-- Agrego un enlace para crear una nueva noticia -->
    </div>
</body>
</html>
