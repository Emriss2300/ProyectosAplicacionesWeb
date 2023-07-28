<?php
// Primero, definiré una función para establecer la conexión a la base de datos.
function conectarDB() {
    // Especifico los detalles de la conexión, como el nombre del servidor, el nombre de usuario, contraseña y base de datos.
    $servername = "localhost";
    $username = "Francisco1234";
    $password = "1234";
    $database = "validar";

    // Creo una nueva instancia de mysqli para establecer la conexión.
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifico si la conexión fue exitosa.
    if ($conn->connect_error) {
        // Si hay un error en la conexión, muestro un mensaje de error y finalizo el script.
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Si la conexión es exitosa, retorno la conexión para su uso posterior.
    return $conn;
}

// Ahora, definiré una función para obtener todas las noticias de la base de datos.
function obtenerNoticias() {
    // Primero, establezco la conexión llamando a la función que definí anteriormente.
    $conn = conectarDB();

    // Preparo la consulta SQL para seleccionar todas las noticias, ordenadas por ID en orden descendente.
    $sql = "SELECT * FROM noticias ORDER BY id_noticias DESC";
    // Ejecuto la consulta y almaceno el resultado en la variable $result.
    $result = $conn->query($sql);

    // Creo un array para almacenar las noticias.
    $noticias = array();

    // Verifico si se obtuvieron resultados de la consulta.
    if ($result->num_rows > 0) {
        // Si hay resultados, recorro cada fila y la agrego al array de noticias.
        while ($row = $result->fetch_assoc()) {
            $noticias[] = $row;
        }
    }

    // Cierro la conexión a la base de datos.
    $conn->close();

    // Finalmente, retorno el array de noticias.
    return $noticias;
}

// A continuación, defino una función para obtener una noticia por su ID.
function obtenerNoticiaPorID($id) {
    // Establezco la conexión a la base de datos llamando a la función conectarDB().
    $conn = conectarDB();

    // Preparo la consulta SQL para seleccionar la noticia con el ID proporcionado.
    $sql = "SELECT * FROM noticias WHERE id_noticias='$id'";
    // Ejecuto la consulta y almaceno el resultado en la variable $result.
    $result = $conn->query($sql);

    // Verifico si se encontró una única noticia con el ID proporcionado.
    if ($result->num_rows == 1) {
        // Si se encontró una noticia, la obtengo como un array asociativo.
        $row = $result->fetch_assoc();
        // Cierro la conexión a la base de datos.
        $conn->close();
        // Retorno los datos de la noticia encontrada.
        return $row;
    } else {
        // Si no se encontró ninguna noticia o hay más de una con el mismo ID, cierro la conexión y retorno null.
        $conn->close();
        return null;
    }
}

// Ahora, implemento una función para insertar una nueva noticia en la base de datos.
function insertarNoticia($fecha, $titular, $descripcion, $imagen_ruta) {
    // Establezco la conexión a la base de datos llamando a conectarDB().
    $conn = conectarDB();

    // Preparo la consulta SQL para insertar la nueva noticia con los datos proporcionados.
    $sql = "INSERT INTO noticias (fecha_noticias, titular_noticia, descripcion_noticia, imagen_ruta) VALUES ('$fecha', '$titular', '$descripcion', '$imagen_ruta')";
    // Ejecuto la consulta y almaceno el resultado en la variable $result.
    $result = $conn->query($sql);

    // Cierro la conexión a la base de datos.
    $conn->close();

    // Retorno el resultado de la inserción, que será true si la inserción fue exitosa, o false si hubo un error.
    return $result;
}

// Luego, defino una función para actualizar una noticia en la base de datos.
function actualizarNoticia($id, $fecha, $titular, $descripcion, $imagen_ruta) {
    // Establezco la conexión a la base de datos llamando a conectarDB().
    $conn = conectarDB();

    // Preparo la consulta SQL para actualizar la noticia con los datos proporcionados.
    $sql = "UPDATE noticias SET fecha_noticias='$fecha', titular_noticia='$titular', descripcion_noticia='$descripcion', imagen_ruta='$imagen_ruta' WHERE id_noticias='$id'";
    // Ejecuto la consulta y almaceno el resultado en la variable $result.
    $result = $conn->query($sql);

    // Cierro la conexión a la base de datos.
    $conn->close();

    // Retorno el resultado de la actualización, que será true si la actualización fue exitosa, o false si hubo un error.
    return $result;
}

// Finalmente, implemento una función para eliminar una noticia de la base de datos.
function eliminarNoticia($id) {
    // Establezco la conexión a la base de datos llamando a conectarDB().
    $conn = conectarDB();

    // Preparo la consulta SQL para eliminar la noticia con el ID proporcionado.
    $sql = "DELETE FROM noticias WHERE id_noticias='$id'";
    // Ejecuto la consulta y almaceno el resultado en la variable $result.
    $result = $conn->query($sql);

    // Cierro la conexión a la base de datos.
    $conn->close();

    // Retorno el resultado de la eliminación, que será true si la eliminación fue exitosa, o false si hubo un error.
    return $result;
}


/* Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4. */