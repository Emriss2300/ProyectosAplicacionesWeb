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
        <a href="../index.php" class="back-btn">Volver</a> <!-- Modificamos el enlace para que apunte a ../index.php -->

        <?php
        // Establecemos la conexión a la base de datos
        $servername = "localhost";
        $username = "Francisco1234";
        $password = "1234";
        $database = "validar";
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificamos la conexión con la base de datos
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Obtenemos las noticias de la base de datos desde la tabla noticias
        $sql = "SELECT * FROM noticias";
        $result = $conn->query($sql);

        // Mostramos las noticias almacenadas en la tabla de la base de datos
        if ($result->num_rows > 0) {
            echo "<table>"; // Comenzamos a mostrar una tabla HTML para las noticias
            echo "<tr><th>Fecha</th><th>Titular</th><th>Descripción</th><th>Imagen</th><th>Acciones</th></tr>"; // Agregamos encabezados a la tabla
            while ($row = $result->fetch_assoc()) { // Iteramos sobre cada fila de noticias obtenidas de la base de datos
                echo "<tr>"; // Comenzamos una fila de la tabla para mostrar una noticia
                echo "<td>" . $row["fecha_noticias"] . "</td>"; // Mostramos la fecha de la noticia en una celda de la tabla
                echo "<td>" . $row["titular_noticia"] . "</td>"; // Mostramos el titular de la noticia en una celda de la tabla
                echo "<td>" . $row["descripcion_noticia"] . "</td>"; // Mostramos la descripción de la noticia en una celda de la tabla
                echo '<td><img src="' . $row["imagen_ruta"] . '"/></td>'; // Mostramos la imagen de la noticia en una celda de la tabla
                echo '<td class="actions">'; // Comenzamos una celda para las acciones (editar y eliminar) de la noticia
                echo '<a href="edit.php?id=' . $row["id_noticias"] . '" class="edit-news-link">Editar</a>'; // Agregamos un enlace para editar la noticia
                echo '<a href="delete.php?id=' . $row["id_noticias"] . '" class="delete-news-link">Eliminar</a>'; // Agregamos un enlace para eliminar la noticia
                echo '</td>'; // Cerramos la celda de acciones
                echo "</tr>"; // Cerramos la fila de la tabla
            }
            echo "</table>"; // Cerramos la tabla
        } else {
            echo "No hay noticias disponibles."; // Mostramos un mensaje si no hay noticias en la base de datos o si no se ha agregado ninguna todavía.
        }

        // Cerramos la conexión con la base de datos
        $conn->close();
        ?>

        <a href="create.php" class="create-news-btn">Crear nueva noticia</a> <!-- Agregamos un enlace para crear una nueva noticia -->
    </div>
</body>
</html>

<!-- Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4. -->