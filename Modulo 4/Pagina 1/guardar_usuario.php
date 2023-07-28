<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; 
$username = "Francisco1234";
$dbpassword = "1234"; 
$dbname = "validar"; 

// Obtener los datos enviados desde el formulario de registro
$usuario = $_POST['usuario'];
$userpassword = $_POST['password'];

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para verificar si el usuario ya existe en la base de datos
$sql = "SELECT * FROM usuario WHERE usuario = '$usuario'";
$result = $conn->query($sql);

// Verificar si se encontró un registro con el mismo usuario en la base de datos
if ($result->num_rows > 0) {
    // El usuario ya existe, mostrar un mensaje de error
    echo "El usuario ya está registrado. Por favor, elige otro nombre de usuario.";
} else {
    // El usuario no existe, guardar la información en la base de datos
    $sql = "INSERT INTO usuario (usuario, password) VALUES ('$usuario', '$userpassword')";
    if ($conn->query($sql) === TRUE) {
        // El usuario se guardó correctamente, redirigir al usuario a la página de inicio de sesión
        header("Location: index.php");
        exit();
    } else {
        // Hubo un error al guardar el usuario, mostrar un mensaje de error
        echo "Error al guardar el usuario: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!--Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4.-->