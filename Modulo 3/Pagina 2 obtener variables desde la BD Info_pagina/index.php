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
    $username = "Francisco1234"; // Nombre de usuario de la base de datos
    $password = "1234"; // Contraseña de la base de datos
    $dbname = "Validar"; // Nombre de la base de datos

    $conexion = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar la conexión a la base de datos
    if (!$conexion) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    // Obtener los idiomas disponibles desde la base de datos
    $consulta_idiomas = "SELECT DISTINCT idioma FROM info_pagina";
    $resultado_idiomas = mysqli_query($conexion, $consulta_idiomas);

    // Obtener el idioma seleccionado o establecer un idioma predeterminado, para que comience por nuestro idioma preferido
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
        // Si no se encontraron resultados, se establecen valores predeterminados.
        $titulo = "No tenemos un cuento que contar";
        $contenido = "Pídele a tus padres que inventen un nuevo cuento";
    }

    // Cerrar conexión a la base de datos
    mysqli_close($conexion);
    ?>

    <!-- Mostrar el título del cuento en un encabezado h2 -->
    <h2><?php echo $titulo; ?></h2>
    <div class="container">
        <!-- Mostrar una imagen relacionada con el cuento -->
        <img src="imagen1.jpg" alt="Imagen del cuento">
        <!-- Mostrar el contenido del cuento dentro de un párrafo con la clase "contenido" -->
        <p class="contenido"><?php echo $contenido; ?></p>
    </div>

    <!-- Formulario para seleccionar el idioma del cuento -->
    <form method="POST">
        <label for="idioma">Selecciona un idioma:</label>
        <select name="idioma" id="idioma">
            <?php
            // Mostrar las opciones de idioma disponibles en el menú desplegable.
            while ($fila_idioma = mysqli_fetch_assoc($resultado_idiomas)) {
                $idioma = $fila_idioma['idioma'];
                $selected = ($idioma == $idioma_seleccionado) ? 'selected' : '';
                // Cada opción se crea utilizando la etiqueta "option"
                // El atributo "value" define el valor que se enviará al servidor cuando el usuario selecciona una opción
                // Si el idioma es el seleccionado actualmente, se marca como "selected"
                echo "<option value=\"$idioma\" $selected>$idioma</option>";
            }
            ?>
        </select>
        <!-- Un botón para enviar el formulario y cambiar el idioma -->
        <button type="submit">Cambiar idioma</button>
    </form>
</body>
</html>

<!-- Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 3. -->