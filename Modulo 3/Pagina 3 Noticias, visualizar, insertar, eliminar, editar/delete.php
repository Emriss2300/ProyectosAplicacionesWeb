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

// Obtener el ID de la noticia a eliminar
$id = $_GET["id"];

// Eliminar la noticia de la base de datos
$sql = "DELETE FROM noticias WHERE id_noticias='$id'";
if ($conn->query($sql) === TRUE) {
    // Noticia eliminada exitosamente
    echo "Noticia eliminada exitosamente. Redireccionando a la página de inicio en 3 segundos...";
    // Redireccionar a index.php después de 3 segundos
    header("refresh:3; url=index.php");
} else {
    echo "Error al eliminar la noticia: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
