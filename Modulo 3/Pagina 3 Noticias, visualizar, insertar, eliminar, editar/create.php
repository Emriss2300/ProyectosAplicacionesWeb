<!DOCTYPE html>
<html>
<head>
    <title>Crear Noticia</title>
    <style>
        /* Estilos CSS para centrar el contenido en la página */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilos para centrar el texto contenido */
        .container {
            text-align: center;
        }

        /* Estilos para centrar el contenido del formulario */
        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Título de la página a mostrar -->
        <h1>Crear Noticia</h1>

        <!-- Creo el Formulario para crear una nueva noticia, esto en base a mi base de datos conectada, con cada campo que compone mi tabla noticias -->

        <form action="create_process.php" method="post" enctype="multipart/form-data">
            <!-- Campo para ingresar la fecha de la noticia -->
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required><br><br>

            <!-- Campo para ingresar el titular de la noticia -->
            <label for="titular">Titular:</label>
            <input type="text" name="titular" id="titular" required><br><br>

            <!-- Campo para ingresar la descripción de la noticia -->
            <label for="descripcion">Descripción:</label><br>
            <textarea name="descripcion" id="descripcion" rows="5" required></textarea><br><br>

            <!-- Campo para cargar una imagen relacionada con la noticia -->
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" required><br><br>

            <!-- Botón de envío del formulario, cuando tengo la informacion lista para publicar-->
            <input type="submit" value="Crear Noticia">
        </form>
    </div>
</body>
</html>

<!-- Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 3. -->