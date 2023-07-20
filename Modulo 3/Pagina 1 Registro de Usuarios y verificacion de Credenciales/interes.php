<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hueyel Chile Online</title>
    <link rel="icon" href="escudo.png">
    <style>
        /* Estilos para el cuerpo de la página */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('imagenrancagua.jpg');
            background-size: cover;
            background-position: center;
        }
        
        /* Estilos para el recuadro de contenido */
        .content-box {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
        }
        
        /* Estilos para el título principal */
        h1 {
            background-color: gainsboro;
        }
    </style>
    <!-- Se muestra el título de la página para dar más cercanía con el usuario -->
    <h1>  Bienvenido a Hueyel Chile Online  </h1>
</head>
<body>
    <div class="content-box">
        <!-- Se muestra un encabezado para solicitar los datos de identificación del usuario -->
        <h3>Ingrese sus Datos Sociales</h3>

        <!-- Se crea un formulario que enviará los datos ingresados a la página "pagina.php" utilizando el método POST -->
        <form action="pagina.php" method="POST">

            <!-- Se muestra una etiqueta para el campo "nombre" -->
            <label for="nombre">Cual es tu apodo:</label>
            
            <!-- Se muestra un campo de entrada de texto para ingresar el nombre, con el id "nombre" y se indica que es obligatorio completarlo -->
            <input type="text" name="nombre" id="nombre" required>

            <br><br>

            <!-- Se muestra una etiqueta para el campo "edad" -->
            <label for="edad">Edad:</label>
            
            <!-- Se muestra un campo de entrada numérico para ingresar la edad, con el id "edad" y se indica que es obligatorio completarlo -->
            <input type="number" name="edad" id="edad" required>

            <br><br>

            <!-- Se muestra una etiqueta para el campo "interes"-->
            <label for="interes">¿Estás interesado en la información de la página?</label><br>
            
            <!-- Se muestra una casilla de verificación para indicar el interés en la información de la página, con el id "interes". Esta permitirá condicionar el carrusel en la página.php -->
            <input type="checkbox" name="interes" id="interes">

            <br><br>

            <!-- Se muestra un botón de envío para enviar los datos ingresados -->
            <input type="submit" value="Enviar">

        </form>
    </div>
</body>
</html>

<!--Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 3.-->