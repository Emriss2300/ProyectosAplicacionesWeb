<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu base de datos está en otro servidor
$username = "Francisco1234";
$dbpassword = "1234"; // Cambia esto si la contraseña de tu base de datos es diferente
$dbname = "validar"; // Nombre de tu base de datos

// Obtener los datos enviados desde el formulario
$usuario = $_POST['usuario'];
$userpassword = $_POST['password']; // Cambiado el nombre de la variable

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM personal WHERE usuario = '$usuario' AND password = '$userpassword'"; // Utilizar la nueva variable

$result = $conn->query($sql);

// Verificar si se encontró un registro con las credenciales proporcionadas
if ($result->num_rows == 1) {
    // Credenciales válidas, el usuario ha iniciado sesión correctamente
    // Redirigir al usuario a pagina.php
    header("Location: interes.php");
    exit(); // Terminar la ejecución del script después de la redirección
} else {
    // Credenciales inválidas, el usuario no puede iniciar sesión
    // Redirigir al usuario a index.php con un mensaje de error
    header("Location: index.php?error=1");
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
