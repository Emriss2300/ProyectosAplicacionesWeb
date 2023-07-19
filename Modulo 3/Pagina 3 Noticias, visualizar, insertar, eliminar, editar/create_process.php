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

// Obtener los datos del formulario
$fecha = $_POST["fecha"];
$titular = $_POST["titular"];
$descripcion = $_POST["descripcion"];

// Directorio donde se guardarán las imágenes
$uploadDir = "images/";

// Verificar si se subió un archivo
if ($_FILES["imagen"]["tmp_name"]) {
    // Generar un nombre único para la imagen
    $imageName = uniqid() . "_" . $_FILES["imagen"]["name"];

    // Ruta completa del archivo
    $uploadPath = $uploadDir . $imageName;

    // Verificar si el directorio de imágenes existe, si no, crearlo
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Mover el archivo a la ubicación final
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $uploadPath)) {
        // Preparar la consulta SQL con un marcador de posición '?'
        $sql = "INSERT INTO noticias (fecha_noticias, titular_noticia, descripcion_noticia, imagen_ruta) VALUES (?, ?, ?, ?)";

        // Preparar la sentencia
        $stmt = $conn->prepare($sql);

        // Vincular los parámetros a los marcadores de posición
        $stmt->bind_param("ssss", $fecha, $titular, $descripcion, $uploadPath);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Noticia creada exitosamente.";

            // Redirigir a la página index.php después de 3 segundos
            sleep(3);
            header("Location: index.php");
            exit();
        } else {
            echo "Error al crear la noticia: " . $stmt->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    echo "Por favor, selecciona una imagen.";
}

// Cerrar la conexión
$conn->close();
?>
