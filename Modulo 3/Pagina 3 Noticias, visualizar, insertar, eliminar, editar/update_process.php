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

// Obtener los datos del formulario
$id = $_POST["id"];
$fecha = $_POST["fecha"];
$titular = $_POST["titular"];
$descripcion = $_POST["descripcion"];
$imagen = $_FILES["imagen"]["tmp_name"] ? $_FILES["imagen"]["name"] : null;

// Actualizar la noticia en la base de datos
$sql = "UPDATE noticias SET fecha_noticias=?, titular_noticia=?, descripcion_noticia=?";
$params = array("sss", $fecha, $titular, $descripcion);

if ($imagen) {
    // Si se proporciona una nueva imagen, mover el archivo a la carpeta "images" y guardar la ruta en la base de datos
    $ruta_destino = "images/" . $imagen;
    move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_destino);

    // Agregar la ruta de la imagen a la consulta SQL
    $sql .= ", imagen_ruta=?";
    $params[0] .= "s";
    $params[] = $ruta_destino;
}

$sql .= " WHERE id_noticias=?";  // Agregar la cláusula WHERE para la actualización específica
$params[0] .= "s";
$params[] = $id;

// Preparar la consulta
$stmt = $conn->prepare($sql);
if ($stmt === FALSE) {
    echo "Error en la consulta preparada: " . $conn->error;
} else {
    // Ejecutar la consulta con los parámetros
    $stmt->bind_param(...$params);
    if ($stmt->execute()) {
        // Si la consulta de actualización se ejecuta correctamente, mostrar mensaje de éxito
        echo "Noticia actualizada exitosamente. Redireccionando a la página de inicio en 3 segundos...";
        // Redirigir a index.php después de 3 segundos
        header("refresh:3; url=index.php");
    } else {
        // En caso de error al actualizar la noticia, mostrar mensaje de error
        echo "Error al actualizar la noticia: " . $conn->error;
    }
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
