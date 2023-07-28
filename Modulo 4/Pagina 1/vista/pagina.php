<!DOCTYPE html>
<html>
<head>
    <!-- Agrego la cabecera de mi pagina web, mostrando el icono y trayendo a bootstrap-->
    <meta charset="UTF-8">
    <title>Agrupación Folclórica Hueyel de Rancagua</title>
    <link rel="icon" href="imagenes/escudo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Agrego una barra de navegación desde bootstrap -->
    <nav class="navbar navbar-expand-lg" id="myNavbar">
        <!-- Contenedor de la barra de navegación -->
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Agrupacion Folclorica Hueyel de Rancagua</a>
          <!-- Botón para colapsar la barra de navegación en dispositivos móviles y sea mas amigable -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Menú de navegación, agregare link externos solo para experimentar. -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://www.instagram.com/agrupacionhueyel_/">Instagram</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Equipo Regional</a>
              </li>
              <li class="nav-item dropdown">
                <!-- Botón desplegable de menú -->
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Menú
                  <span class="caret"></span>
                </button>
                <!-- Opciones del menú desplegable -->
                <ul class="dropdown-menu">
                  <li><a href="#">Próximos Eventos</a></li>
                  <li><a href="#">Inscripciones</a></li>
                  <li><a href="#">Equipo Regional</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Integrantes</a>
              </li>
            </ul>
            <!-- Formulario de búsqueda -->
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>


    <!-- Creo un container para almacenar las imagenes y le escripo titulos y una  breve reseña de lo que veran-->
    <div class="container">
        <div style="text-align: center;"><h4> Somos Emblema del Folclór Regional, 15 años de Trayectoria.</h4></div>
        <div style="text-align: center;"><h6> Imagenes de muestra de nuestra agrupación Folclórica</h6></div>

        <!-- Aqui comienzan las Modificaciones de la migracion a PHP -->
        <?php
        // Declaración de variables para las imágenes, aqui asigno con el simbolo reserbado $ las variables.
        $imagen1 = "imagenes/imagen3.jpg";
        $imagen2 = "imagenes/imagen1.jpg";
        $imagen3 = "imagenes/imagen4.jpg";
        $imagen4 = "imagenes/imagen2.jpg";
        $imagen5 = "imagenes/imagen5.jpg";

        // en esta sesion verificamos si han enviado imagenes al POST, para resivirlas y ocuparlas en esta pagina. 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos enviados
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $interes = isset($_POST['interes']);

            // Mostrar en pantalla el nombre y la edad del usuario, tal como se hacia con la palabra reservada print en python.
            echo "<h1>Bienvenido(a), $nombre</h1>";
            echo "<p>Tu edad es: $edad años</p>";

            // Identificar la edad del usuario, generando una codicionante segun la respuesta para mostrar una imagen u otra segun corresponda, las imagenes las edite para que se entienda que cumplen la funion de manera mas facil. 
            if ($edad < 18) {
                // información para menores de edad, agregue una fotografia de un bebe 
                echo "<img src='imagenes/imagen6.jpg' alt='Imagen para menores de edad'>";
            } else {
                // información para mayores de edad, agregue una fotografia de una cerveza y con el texto de que es mayor de edad.
                echo "<img src='imagenes/imagen7.png' alt='Imagen para mayores de edad'>";
            }
        }
        ?>

        <div class="row">
            <div class="col">
                <!-- Uso de la variable $imagen3 para la imagen -->
                <img src="<?php echo $imagen3; ?>" alt="Imagen 3" class="rounded">
            </div>
            <div class="col">
                <!-- Uso de la variable $imagen1 para la imagen -->
                <img src="<?php echo $imagen1; ?>" alt="Imagen 1" class="rounded-circle">
            </div>
            <div class="col">
                <!-- Uso de la variable $imagen4 para la imagen -->
                <img src="<?php echo $imagen4; ?>" alt="Imagen 4" class="rounded">
            </div>
            <div class="col">
                <!-- Uso de la variable $imagen2 para la imagen -->
                <img src="<?php echo $imagen2; ?>" alt="Imagen 2" class="rounded-circle">
            </div>
            <div class="col">
                <!-- Uso de la variable $imagen5 para la imagen -->
                <img src="<?php echo $imagen5; ?>" alt="Imagen 5" class="rounded">
            </div>
        </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>  
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/carrusel1.jpg" alt="Cuadro Norte Aymara"> 
                </div>
                <div class="carousel-item">
                    <img src="imagenes/carrusel2.jpg" alt="Arauco">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/carrusel3.jpg" alt="Carnaval Dia de Bolivia - Santiago de Chile.">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/carrusel4.jpg" alt="Caporales Gira Valdivia">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- creo otra seccion div para agregar 2 listas, una con viñetas y otra ordenada con numeros.-->
        <div class="Listas">
            <ul><h3>Requisitos para Ingreso a la agrupación</h3>
                <li><h6>Ser Mayor de 14 Años de Edad</h6></li>
                <li><h6>Experiencia Previa en Danza Folclórica</h6></li>
                <li><h6>Tener forma de Transporte al lugar de ensayo y Presentaciones</h6></li>
                <li><h6>Tener Conducta responsable en horarios y cuidado de las vestimentas</h6></li>
            </ul>

            <ol>
                <h3>Cuadros Representativos más Comunes</h3>
                <li><h6>Zona Huasa</h6></li>
                <li><h6>Zona Norte Aymara</h6></li>
                <li><h6>Zona Sur</h6></li>
                <li><h6>Cuadro Latinoamericano</h6></li>
            </ol>
        </div>

        <div class="Reseñahueyel">
            <h3> Reseña Histórica de Nuestra Agrupación</h3>
            <?php
            // Conexión a la base de datos
            $servername = "localhost";
            $username = "Francisco1234";
            $password = "1234";
            $dbname = "validar";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Consulta para obtener todos los párrafos
            $sql = "SELECT texto FROM parrafos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Mostrar cada párrafo en un loop
                while ($row = $result->fetch_assoc()) {
                    echo "<p><h6>" . $row["texto"] . "</h6></p>";
                }
            } else {
                echo "No se encontraron párrafos.";
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
        </div>

        <!-- Mostrar el banner de información si se seleccionó el interés en la pagina principal index.php-->
        <?php
        if ($interes) {
            echo "<div id='myInterestCarousel' class='carousel slide' data-ride='carousel'>
                    <ol class='carousel-indicators'>
                        <li data-target='#myInterestCarousel' data-slide-to='0' class='active'></li>
                        <li data-target='#myInterestCarousel' data-slide-to='1'></li>
                        <li data-target='#myInterestCarousel' data-slide-to='2'></li>
                    </ol>
                    <div class='carousel-inner'>
                        <div class='carousel-item active'>
                            <img src='imagenes/imagen8.jpg' alt='Imagen 1'>
                        </div>
                        <div class='carousel-item'>
                            <img src='imagenes/imagen9.jpg' alt='Imagen 2'>
                        </div>
                        <div class='carousel-item'>
                            <img src='imagenes/imagen10.jpg' alt='Imagen 3'>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>

    <footer>
        <h7> Francisco Núñez Ortiz - Agrupación Folclórica Hueyel de Rancagua. </h7>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!--Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4.-->
