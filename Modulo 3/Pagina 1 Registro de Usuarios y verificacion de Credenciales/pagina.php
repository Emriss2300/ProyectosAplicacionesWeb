<!DOCTYPE html>
<html>
<head>
    <!-- Agrego la cabecera de mi pagina web, mostrando el icono y trayendo a bootstrap-->
    <meta charset="UTF-8">
    <title>Agrupación Folclórica Hueyel de Rancagua</title>
    <link rel="icon" href="escudo.png">
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
        $imagen1 = "imagen3.jpg";
        $imagen2 = "imagen1.jpg";
        $imagen3 = "imagen4.jpg";
        $imagen4 = "imagen2.jpg";
        $imagen5 = "imagen5.jpg";

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
                echo "<img src='imagen6.jpg' alt='Imagen para menores de edad'>";
            } else {
                // información para mayores de edad, agregue una fotografia de una cerveza y con el texto de que es mayor de edad.
                echo "<img src='imagen7.png' alt='Imagen para mayores de edad'>";
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

        <div id="```php
        myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>  
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="carrusel1.jpg" alt="Cuadro Norte Aymara"> 
                </div>
                <div class="carousel-item">
                    <img src="carrusel2.jpg" alt="Arauco">
                </div>
                <div class="carousel-item">
                    <img src="carrusel3.jpg" alt="Carnaval Dia de Bolivia - Santiago de Chile.">
                </div>
                <div class="carousel-item">
                    <img src="carrusel4.jpg" alt="Caporales Gira Valdivia">
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
         <!-- en esta seccion creo parrafos en casillas contenedoras faciles de modificar desde el css, dado que me pedian que los parrafos tuviesen distinto tamaño de letra.   -->

        <!-- Párrafo 1 -->
        <div class="Reseñahueyel">
            <h3> Reseña Histórica de Nuestra Agrupación</h3>
            <p><h6>"Un poco de nuestra historia": Desde el día 7 de agosto de 2007, a las 19:00 horas, la "Agrupación Folclórica Hueyel de Rancagua" comenzó sus funciones. Desde ese día, hemos integrado a niños y jóvenes de la Sexta Región de nuestro país, provenientes de diferentes comunas, quienes se han unido y aprendido en nuestras filas con el fin de cultivar danzas y costumbres de nuestro país y el extranjero. Hemos mostrado nuestra danza nacional dentro y fuera del territorio nacional, incluso en el extranjero en los años 2011 y 2013. Actualmente, nuestra directora general es la señora Lucila Ortiz, destacada folclorista valdiviana arraigada en las tradiciones del campo sur de nuestro país. Nuestro profesor actual es Francisco Núñez, folclorista rancagüino. A lo largo de estos 15 años, hemos tenido más de 930 presentaciones, más de 9 giras y más de 5000 horas de ensayo. Más de 170 bailarines han pasado por nuestras filas, convirtiéndonos en una de las cunas de bailarines folclóricos en Rancagua. Hemos proporcionado a otras agrupaciones bailarines funcionales y llenos de la chispa de la superación personal. En el año 2018, logramos, por primera vez en la historia de nuestra región, que una agrupación folclórica rancagüina participara en la entrada folclórica más importante de Santiago, para el pueblo boliviano residente en Chile. Como agrupación chilena, fuimos reconocidos como bailarines capacitados para desarrollar la danza del caporal y representarla. Actualmente, en 2019, Hueyel de Rancagua forma parte de la Filial Oficial Rancagua de Tobas Nueva Raíz Andina Arica, siendo la primera agrupación folclórica en ser filial de Tobas en la Región. Les abrazamos y esperamos que la manifestación de alegría al bailar de nuestra agrupación sea del agrado de todos ustedes.
                
            Agrupación Folclórica Hueyel de Rancagua.</h6></p>
        </div>

        <!-- Párrafo 2 -->
        <div class="parrafo2">
            <p><h5>Nuestra Agrupación folclórica actualmente tiene 15 años de trayectoria, dada la pandemia del Covid-19, los ensayos se vieron truncados por más de 8 meses, lo que hizo difícil recuperar cuadros que históricamente estaban listos en la agrupación.</h5></p>
        </div>

        <!-- Párrafo 3 -->
        <div class="parrafo3">
            <p><h4>Nuestra institución es sin fines de lucro y busca la difusión del folclór en sus diferentes manifestaciones, siendo parte de la Unión Nacional De Folclóristas.</h4></p>
        </div>

        <!-- Párrafo 4 -->
        <div class="parrafo4">
            <p><h3>Sus tres dirigentes artísticos, Francisco Núñez, Lucila Ortiz, Fernanda Núñez, hemos trabajado incansablemente para el desarrollo cultural de cientos de niños y jóvenes de la región, apoyando a la cultura tradicional.</h3></p>
        </div>

        <!-- Párrafo 5 -->
        <div class="parrafo5">
            <p><h2>Sus tres dirigentes artísticos, Francisco Núñez, Lucila Ortiz, Fernanda Núñez, hemos trabajado incansablemente para el desarrollo cultural de cientos de niños y jóvenes de la región, apoyando a la cultura tradicional.</h2></p>
        </div>

        <!-- Mostrar el banner de información si se seleccionó el interés en la pagina principal index.php-->
        <?php
        if ($interes) {
            echo "<div id='myCarousel' class='carousel slide' data-ride='carousel'>
                    <ol class='carousel-indicators'>
                        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                        <li data-target='#myCarousel' data-slide-to='1'></li>
                        <li data-target='#myCarousel' data-slide-to='2'></li>
                    </ol>
                    <div class='carousel-inner'>
                        <div class='carousel-item active'>
                            <img src='imagen8.jpg' alt='Imagen 1'>
                        </div>
                        <div class='carousel-item'>
                            <img src='imagen9.jpg' alt='Imagen 2'>
                        </div>
                        <div class='carousel-item'>
                            <img src='imagen10.jpg' alt='Imagen 3'>
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
Modulo 3.-->