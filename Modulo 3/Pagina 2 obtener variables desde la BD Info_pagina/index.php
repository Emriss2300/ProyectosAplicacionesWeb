<!DOCTYPE html>
<html>
<head>
    <title>Cuento</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "Francisco1234";
    $password = "1234";
    $dbname = "Validar";

    $conexion = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar la conexión a la base de datos
    if (!$conexion) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    // Obtener los idiomas disponibles desde la base de datos
    $consulta_idiomas = "SELECT DISTINCT idioma FROM info_pagina";
    $resultado_idiomas = mysqli_query($conexion, $consulta_idiomas);

    // Obtener el idioma seleccionado o establecer un idioma predeterminado
    $idioma_seleccionado = isset($_POST['idioma']) ? $_POST['idioma'] : 'espanol';

    // Obtener el título y el contenido en el idioma seleccionado desde la base de datos
    $consulta_contenido = "SELECT titulo, contenido FROM info_pagina WHERE idioma = '$idioma_seleccionado'";
    $resultado_contenido = mysqli_query($conexion, $consulta_contenido);

    // Verificar si se encontraron resultados
    if (mysqli_num_rows($resultado_contenido) > 0) {
        $fila = mysqli_fetch_assoc($resultado_contenido);
        $titulo = $fila['titulo'];
        $contenido = $fila['contenido'];
    } else {
        $titulo = "El cachorro del cazador";
        $contenido = "Érase una vez un perro cazador...";
    }

    // Cerrar conexión a la base de datos
    mysqli_close($conexion);
    ?>

    <h2><?php echo $titulo; ?></h2>
    <div class="container">
        <img src="imagen1.jpg" alt="Imagen del cuento">
        <p class="contenido"><?php echo $contenido; ?></p>
    </div>

    <form method="POST">
        <label for="idioma">Selecciona un idioma:</label>
        <select name="idioma" id="idioma">
            <?php
            // Mostrar las opciones de idioma disponibles
            while ($fila_idioma = mysqli_fetch_assoc($resultado_idiomas)) {
                $idioma = $fila_idioma['idioma'];
                $selected = ($idioma == $idioma_seleccionado) ? 'selected' : '';
                echo "<option value=\"$idioma\" $selected>$idioma</option>";
            }
            ?>
        </select>
        <button type="submit">Cambiar idioma</button>
    </form>
</body>
</html>
