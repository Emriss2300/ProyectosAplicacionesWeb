<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hueyel Chile Online</title>
    <link rel="icon" href="escudo.png">
    <h1> Bienvenido a Hueyel Chile Online </h1>

</head>
<body>
    <h3>Ingrese sus Datos de Identificación</h3>
    <form action="pagina.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required><br><br>
        
        <label for="interes">¿Estás interesado en la información de la página?</label><br>
        <input type="checkbox" name="interes" id="interes"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
