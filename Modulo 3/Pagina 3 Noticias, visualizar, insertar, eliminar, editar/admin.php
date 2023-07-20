<!DOCTYPE html>
<html>
<head>
    <title>Administración de Noticias</title>
    <style>
        /* Creo Estilos CSS para la presentación de la página, para mejorar un poco la estetica. */
    </style>
</head>
<body>
    <h1>Administración de Noticias</h1>

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
            echo '<a href="delete.php?id=' . $row["id_noticias"] . '">Eliminar</a>'; // Agrego un enlace para eliminar la noticia
            echo '</td>'; // Cierro la celda de acciones
            echo "</tr>"; // Cierro la fila de la tabla
        }
        echo "</table>"; // Cierro la tabla
    } else {
        echo "No hay noticias disponibles."; // Muestro un mensaje si no hay noticias en la base de datos o si no se ha agregado ninguna todavia.
    }

    // Cerrar la conexión con la base.
    $conn->close(); 
    ?>

    <a href="create.php" class="create-news-link">Crear nueva noticia</a> <!-- Agrego un enlace para crear una nueva noticia -->
</body>
</html>

<!-- Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 3. -->