<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "Francisco1234";
$password = "1234";
$database = "validar";
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    // Si hay un error de conexión, mostrar un mensaje de error y terminar el script
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
$id = $_POST["id"];
$fecha = $_POST["fecha"];
$titular = $_POST["titular"];
$descripcion = $_POST["descripcion"];
$imagen = $_FILES["imagen"]["tmp_name"] ? file_get_contents($_FILES["imagen"]["tmp_name"]) : null;

// Actualizar la noticia en la base de datos
$sql = "UPDATE noticias SET fecha_noticias='$fecha', titular_noticia='$titular', descripcion_noticia='$descripcion'";
if ($imagen) {
    // Si se proporciona una nueva imagen, agregar la ruta de la imagen a la consulta SQL
    $sql .= ", imagen_ruta='$imagen'";
}
$sql .= " WHERE id_noticias='$id'";

if ($conn->query($sql) === TRUE) {
    // Si la consulta de actualización se ejecuta correctamente, mostrar mensaje de éxito y redirigir a la página de inicio que es index.php
    echo "Noticia actualizada exitosamente. Redireccionando a la página de inicio en 3 segundos...";
    // Redirigir a index.php después de 3 segundos
    header("refresh:3; url=index.php");
} else {
    // En caso de error al actualizar la noticia, mostrar mensaje de error
    echo "Error al actualizar la noticia: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

<!-- Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 3. -->