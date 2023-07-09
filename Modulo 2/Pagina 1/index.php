<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hueyel Chile Online</title>
    <link rel="icon" href="escudo.png">
    <h1> Bienvenido a Hueyel Chile Online </h1>
    <!-- Se muestra el título de la página para dar mas cercania con el usuario -->

</head>
<body>
    <h3>Ingrese sus Datos de Identificación</h3>
    <!-- Se muestra un encabezado para solicitar los datos de identificación del usuraio -->

    <form action="pagina.php" method="POST">
        <!-- Se crea un formulario que enviará los datos ingresados a la página "pagina.php" utilizando el método POST -->

        <label for="nombre">Nombre:</label>
        <!-- Se muestra una etiqueta para el campo "nombre" -->

        <input type="text" name="nombre" id="nombre" required>
        <!-- Se muestra un campo de entrada de texto para ingresar el nombre, con el id "nombre" y se indica que es obligatorio completarlo -->

        <br><br>
        
        <label for="edad">Edad:</label>
        <!-- Se muestra una etiqueta para el campo "edad" -->

        <input type="number" name="edad" id="edad" required>
        <!-- Se muestra un campo de entrada numérico para ingresar la edad, con el id "edad" y se indica que es obligatorio completarlo -->

        <br><br>
        
        <label for="interes">¿Estás interesado en la información de la página?</label><br>
        <!-- Se muestra una etiqueta para el campo "interes"-->

        <input type="checkbox" name="interes" id="interes">
        <!-- Se muestra una casilla de verificación para indicar el interés en la información de la página, con el id "interes" , esta permitira condicionar el carrusel en la pagina.php-->

        <br><br>
        
        <input type="submit" value="Enviar">
        <!-- Se muestra un botón de envío para enviar los datos ingresados -->

    </form>
</body>
</html>
