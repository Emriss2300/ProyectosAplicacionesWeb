<!DOCTYPE html>
<html>
<head>
    <title>Crear Noticia</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear Noticia</h1>

        <form action="create_process.php" method="post" enctype="multipart/form-data">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required><br><br>

            <label for="titular">Titular:</label>
            <input type="text" name="titular" id="titular" required><br><br>

            <label for="descripcion">Descripción:</label><br>
            <textarea name="descripcion" id="descripcion" rows="5" required></textarea><br><br>

            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" required><br><br>

            <input type="submit" value="Crear Noticia">
        </form>
    </div>
</body>
</html>
