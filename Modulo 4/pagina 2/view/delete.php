<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "Francisco1234";
$password = "1234";
$database = "validar";
$conn = new mysqli($servername, $username, $password, $database);

// Verifico la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener el ID de la noticia a eliminar
$id = $_GET["id"];

// Elimino la noticia de la base de datos
$sql = "DELETE FROM noticias WHERE id_noticias='$id'";
if ($conn->query($sql) === TRUE) {
    // Si la consulta de eliminación se ejecuta correctamente, mostrar mensaje de éxito
    echo "Noticia eliminada exitosamente, seras redirigido al inicio en 3 segundos...";
    // Esperar 3 segundos antes de redireccionar a index.php
    header("refresh:3; url=../index.php");
} else {
    // En caso de error al eliminar la noticia, mostrar mensaje de error
    echo "Error al eliminar la noticia: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

<!-- Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4. -->