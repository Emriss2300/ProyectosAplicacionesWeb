<?php
require_once 'Modelo.php';

class Controlador {
    public static function procesarFormulario() {
        // Verificar si se envió el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos enviados
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $interes = isset($_POST['interes']);

            // Llamar a la función del modelo para obtener la imagen y el texto según la edad
            $resultado = Modelo::obtenerImagenYTexto($edad, $interes);

            // Mostrar en pantalla el nombre y la edad del usuario
            echo "<h1>Bienvenido(a), $nombre</h1>";
            echo "<p>Tu edad es: $edad años</p>";

            // Mostrar la imagen correspondiente
            echo "<img src='" . $resultado['imagen'] . "' alt='Imagen para usuario'>";

            // Mostrar el texto correspondiente
            echo "<p><h6>" . $resultado['texto'] . "</h6></p>";
        }
    }
}
?>
<!--Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4.-->