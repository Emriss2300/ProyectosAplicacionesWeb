<?php
// comienzo con la conexión a la base de datos, en mi caso la nombre "validar".
$servername = "localhost";
$username = "Francisco1234";
$password = "1234";
$database = "validar";
$conn = new mysqli($servername, $username, $password, $database);

// Verifico la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario fecha, titular y descripción.
$fecha = $_POST["fecha"];
$titular = $_POST["titular"];
$descripcion = $_POST["descripcion"];

// agrego un directorio donde se guardarán las imágenes
$uploadDir = "images/"; // Ajustamos la ruta para que apunte a la carpeta images dentro de la carpeta view

// Verifico si se subió un archivo de imagen.

if ($_FILES["imagen"]["tmp_name"]) {
    // Generar un nombre único para la imagen
    $imageName = uniqid() . "_" . $_FILES["imagen"]["name"];

    // Ruta completa del archivo
    $uploadPath = $uploadDir . $imageName;

    // Verificar si el directorio de imágenes existe, si no, crearlo
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Mover el archivo a la ubicación final, para que la imagen quede guardada en la carpeta "images" dentro de la carpeta "view".
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $uploadPath)) {
        // Preparar la consulta SQL con un marcador de posición '?'
        $sql = "INSERT INTO noticias (fecha_noticias, titular_noticia, descripcion_noticia, imagen_ruta) VALUES (?, ?, ?, ?)";

        // Preparar la sentencia
        $stmt = $conn->prepare($sql);
       
        $stmt->bind_param("ssss", $fecha, $titular, $descripcion, $uploadPath);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Si la noticia se creó correctamente, mostrar mensaje y redirigir a la página index.php después de 3 segundos.
            echo "Noticia creada exitosamente, seras redirigido automaticamente en 3 segundos...";

            // Redirigir a index.php después de 3 segundos
            header("refresh:3; url=../index.php");
            exit(); // Importante agregar "exit()" después de la redirección para detener la ejecución del código.
        } else {
            // En caso de error al ejecutar la consulta, mostrar mensaje de error
            echo "Error al crear la noticia: " . $stmt->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    } else {
        // Si hubo un error al subir la imagen, mostrar mensaje de error
        echo "Error al subir la imagen.";
    }
} else {
    // Si no se seleccionó una imagen, mostrar mensaje de advertencia
    echo "Por favor, selecciona una imagen.";
}

// Cerrar la conexión
$conn->close();
?>

<!-- Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4. -->
