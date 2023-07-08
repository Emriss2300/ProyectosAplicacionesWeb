<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agrupación Folclórica Hueyel de Rancagua</title>
    <!-- Agrega los enlaces a las hojas de estilo y scripts necesarios -->
</head>
<body>
    <h1>Bienvenido a Hueyel Chile Online</h1>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <label for="interes">¿Estás interesado en la información de la página?</label>
        <input type="checkbox" name="interes" id="interes">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
