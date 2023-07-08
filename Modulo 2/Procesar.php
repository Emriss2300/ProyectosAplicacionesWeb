<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$interes = isset($_POST['interes']);

$parrafo1 = "<h1>Texto del párrafo 1</h1>";
$parrafo2 = "<h2>Texto del párrafo 2</h2>";
$parrafo3 = "<h3>Texto del párrafo 3</h3>";
$parrafo4 = "<h4>Texto del párrafo 4</h4>";
$parrafo5 = "<h5>Texto del párrafo 5</h5>";

$imagen1 = "ruta/imagen1.jpg";
$imagen2 = "ruta/imagen2.jpg";
$imagen3 = "ruta/imagen3.jpg";
$imagen4 = "ruta/imagen4.jpg";
$imagen5 = "ruta/imagen5.jpg";

// Realiza acciones adicionales según tus necesidades

// Redirige al usuario a la página de resultado
header("Location: resultado.php");
exit;
?>
