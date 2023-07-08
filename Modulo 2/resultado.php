<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agrupación Folclórica Hueyel de Rancagua - Resultado</title>
    <!-- Agrega los enlaces a las hojas de estilo y scripts necesarios -->
</head>
<body>
    <h1>¡Hola, <?php echo $nombre; ?>!</h1>
    
    <?php
    if ($edad < 18) {
        echo "<h2>Eres menor de edad.</h2>";
        // Mostrar imágenes o información específica para menores de edad
    } else {
        echo "<h2>Eres mayor de edad.</h2>";
        // Mostrar imágenes o información específica para mayores de edad
    }
    ?>
    
    <?php echo $parrafo1; ?>
    <?php echo $parrafo2; ?>
    <?php echo $parrafo3; ?>
    <?php echo $parrafo4; ?>
    <?php echo $parrafo5; ?>
    
    <img src="<?php echo $imagen1; ?>" alt="Imagen 1">
    <img src="<?php echo $imagen2; ?>" alt="Imagen 2">
    <img src="<?php echo $imagen3; ?>" alt="Imagen 3">
    <img src="<?php echo $imagen4; ?>" alt="Imagen 4">
    <img src="<?php echo $imagen5; ?>" alt="Imagen 5">
</body>
</html>
