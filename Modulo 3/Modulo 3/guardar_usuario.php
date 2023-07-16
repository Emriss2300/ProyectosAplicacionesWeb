<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu base de datos está en otro servidor
$username = "Francisco1234";
$dbpassword = "1234"; // Cambia esto si la contraseña de tu base de datos es diferente
$dbname = "validar"; // Nombre de tu base de datos

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
$sql = "SELECT * FROM personal WHERE usuario = '$usuario'";
$result = $conn->query($sql);

// Verificar si se encontró un registro con el mismo usuario en la base de datos
if ($result->num_rows > 0) {
    // El usuario ya existe, mostrar un mensaje de error
    echo "El usuario ya está registrado. Por favor, elige otro nombre de usuario.";
} else {
    // El usuario no existe, guardar la información en la base de datos
    $sql = "INSERT INTO personal (usuario, password) VALUES ('$usuario', '$userpassword')";
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
