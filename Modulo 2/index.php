<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agrupación Folclórica Hueyel de Rancagua</title>
        <link rel="icon" href="escudo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">
        
    </head>

    <body>

        <!-- Creare segun lo solicitado una barra de navegacion -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#" style="color: #ffffff;">Agrupación Folclórica Hueyel de Rancagua</a>

        </nav>

        <div class="container">
            <div style="text-align: center;"><h4> Somos Emblema del Folclór Regional, 15 años de Trayectoria.</h4></div>
            <div style="text-align: center;"><h6> Imagenes de muestra de nuestra agrupación Folclórica</h6></div> 

            <!-- creare con dropdown un menu plegable, todavia no se como unir los item del menu para que cambie la página-->
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Menú
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Proximos Eventos</a></li>
                    <li><a href="#">Inscripciones</a></li>
                    <li><a href="#">Equipo Regional</a></li>
                </ul>
            </div>

            <!-- me piden ingresar un tota del 5 imagenes, las que deben cumplir con algunos requisitos. 
             De las 5 imágenes, dos deben ser de tipo circle y tres rounded, utilizo para eso bootstrap segun entiendo.-->
            <div class="row">
                <div class="col">
                    <img src="imagen3.jpg" alt="Imagen 3" class="rounded">
                </div>
                <div class="col">
                    <img src="imagen1.jpg" alt="Imagen 1" class="rounded-circle">
                </div>
                <div class="col">
                    <img src="imagen4.jpg" alt="Imagen 4" class="rounded">
                </div>
                <div class="col">
                    <img src="imagen2.jpg" alt="Imagen 2" class="rounded-circle">
                </div>
                <div class="col">
                    <img src="imagen5.jpg" alt="Imagen 5" class="rounded">
                </div>
            </div>

            <!-- se me pide ingresar imagenes con estilo carrusel, lo primero que hice fue elegir las imagenes, guardarlas en la carpeta donde tengo el html, luego editarlas para que todas tengan las mismas dimensiones, luego creo un contednedor para el carrusel, esta es una de las partes del codigo que mas me gusto desarrollar, incluyendo la edision de las fotos para que tengan el mismo tamaño  -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- acá escribo una lista ordenada con los indicadores base del carrusel, y la posicion de las diapositivas dentro del carrusel -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>  
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- ahora en un nuevo div creamos la sesion en la que agrego las fotos que seran utilizadas en el carrusel y le asigno un nombre a la imagen del carrusel con la palabra alt, y la ubicacion de origen de las imagenes con el src -->
                <div class="carousel-inner">
                    <div class="carousel-item active"> <!-- agrego la palabra "active" para informar que esta es la posicion en la que comienza el carrusel. -->
                        <img src="carrusel1.jpg" alt="Cuadro Norte Aymara"> 
                    </div>
                    <div class="carousel-item">
                        <img src="carrusel2.jpg" alt="Arauco">
                    </div>
                    <div class="carousel-item">
                        <img src="carrusel3.jpg" alt="Carnaval Dia de Bolivia - santiago de chile.">
                    </div>
                    <div class="carousel-item">
                        <img src="carrusel4.jpg" alt="Caporales Gira Valdivia">
                    </div>
                </div>

                <!-- en esta seccion agrego dos elemento <a> y agrego las clases  "carousel-control-prev" y "carousel-control-next" que representan los botones de navegación para ir a la diapositiva anterior y siguiente, los que son las fechas adelante y atras del mismo carrusel, para poder interactuar con las imagenes-->

                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- en esta sesion creo listas ordenadas por viñetas y por numeracion ordenada.
            en el Css hago que las dos listas se muestren una al lado de la otra.Aquí mantengo el mismo tipo de letra y tamaño de la fuente para las 2 listas.  -->

            <div class="Listas">
                <ul><h3>Requisitos para Ingreso a la agrupación</h3>
                <li><h6>Ser Mayor de 14 Años de Edad</h6></li>
                <li><h6>Experiencia Previa en Danza Folclórica</h6></li>
                <li><h6>Tener forma de Transporte al lugar de ensayo y Presentaciones</h6></li>
                <li><h6>Tener Conducta responsable en horarios y cuidado de las vestimentas</h6></li>
                </ul>

                <ol>
                <h3>Cuadros Representativos más Comunes</h3>
                <```html
                <ol>
                    <li><h6>Zona Huasa</h6></li>
                    <li><h6>Zona Norte Aymara</h6></li>
                    <li><h6>Zona Sur </h6></li>
                    <li><h6>Cuadro Latinoamericano</h6></li>
                </ol>
            </div>

            <!-- Ahora agregare los párrafos solicitados, para darle un toque más de blogs o como los diarios pondré primero un párrafo que ocupe la parte central de la página y posteriormente agregaré párrafos más pequeños debajo de este párrafo grande. La idea es poder poner los 4 párrafos pequeños uno al lado del otro en amor como en un bloque -->

            <!-- Párrafo 1 -->
            <div class="Reseñahueyel">
                <h3> Reseña Histórica de Nuestra Agrupación</h3>
                <p>
                    <h6>"Un poco de nuestra historia": Desde el día 7 de agosto de 2007, a las 19:00 horas, la "Agrupación Folclórica Hueyel de Rancagua" comenzó sus funciones. Desde ese día, ha integrado a niños y jóvenes de la Sexta Región de nuestro país, provenientes de diferentes comunas, quienes se han unido y aprendido en nuestras filas con el fin de cultivar danzas y costumbres de nuestro país y el extranjero. Hemos mostrado nuestra danza nacional dentro y fuera del territorio nacional, incluso en el extranjero en los años 2011 y 2013. Actualmente, la directora general es la señora Lucila Ortiz, destacada folclorista valdiviana arraigada en las tradiciones del campo sur de nuestro país. El profesor actual es Francisco Núñez, folclorista rancagüino.

                    A lo largo de estos 15 años, hemos tenido más de 930 presentaciones, más de 9 giras y más de 5000 horas de ensayo. Más de 170 bailarines han pasado por nuestras filas, convirtiéndonos en una de las cunas de bailarines folclóricos en Rancagua. Proporcionamos a otras agrupaciones bailarines funcionales y llenos de la chispa de la superación personal.

                    En el año 2018, logramos, por primera vez en la historia de nuestra región, que una agrupación folclórica rancagüina participara en la entrada folclórica más importante de Santiago, para el pueblo boliviano residente en Chile. Como agrupación chilena, fuimos reconocidos como bailarines capacitados para desarrollar la danza del caporal y representarla.

                    Actualmente, en 2019, Hueyel de Rancagua forma parte de la Filial Oficial Rancagua de Tobas Nueva Raíz Andina Arica, siendo la primera agrupación folclórica en ser filial de Tobas en la Región. Los abrazamos y esperamos que la manifestación de alegría al bailar de nuestra agrupación sea del agrado de todos ustedes.

                    Agrupación Folclórica Hueyel de Rancagua.</h6>
                </p>
            </div>

            <!-- Párrafo 2 -->
            <div class="parrafo2">
                <p>
                    <?php
                        $textoParrafo2 = "Nuestra Agrupación folclórica actualmente tiene 15 años de trayectoria, dada la pandemia del Covid-19, los ensayos se vieron truncados por más de 8 meses, lo que hizo difícil recuperar cuadros que históricamente estaban listos en la agrupación.";
                        echo "<h5>" . $textoParrafo2 . "</h5>";
                    ?>
                </p>
            </div>

            <!-- Párrafo 3 -->
            <div class="parrafo3">
                <p>
                    <?php
                        $textoParrafo3 = "Nuestra institución es sin fines de lucro y busca la difusión del folclor en sus diferentes manifestaciones, siendo parte de la Unión Nacional De Folcloristas.";
                        echo "<h4>" . $textoParrafo3 . "</h4>";
                    ?>
                </p>
            </div>

            <!-- Párrafo 4 -->
            <div class="parrafo4">
                <p>
                    <?php
                        $textoParrafo4 = "Sus tres dirigentes artísticos, Francisco Núñez, Lucila Ortiz, Fernanda Núñez, han trabajado incansablemente para el desarrollo cultural de cientos de niños y jóvenes de la región, apoyando a la cultura tradicional.";
                        echo "<h3>" . $textoParrafo4 . "</h3>";
                    ?>
                </p>
            </div>

            <!-- Párrafo 5 -->
            <div class="parrafo5">
                <p>
                    <?php
                        $textoParrafo5 = "Agrupación Folclórica Hueyel de Rancagua.";
                        echo "<h2>" . $textoParrafo5 . "</h2>";
                    ?>
                </p>
            </div>
        </div>

        <!-- Ahora agrego el pie de página, el que debo modificar en CSS para que tenga el mismo color que la barra de navegación y el texto centrado, esta es la parte que encontré más fácil de todo el código-->

        <footer>
            <?php
                $textoFooter = "Francisco Núñez Ortiz - Agrupación Folclórica Hueyel de Rancagua.";
                echo "<h7>" . $textoFooter . "</h7>";
            ?>
        </footer>


        <!-- En mi código HTML, he agregado referencias a archivos JavaScript, como jQuery, Popper.js y Bootstrap, para mejorar la funcionalidad y el diseño de mi página web. También he incluido un archivo JavaScript personalizado llamado "script.js" para agregar mi propio código y personalizar la página según mis necesidades. -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="script.js"></script>


        <!-- en general las funciones de script me parecieron necesarias para que se interactúe con la página a nivel usuario, en particular espero que con el tiempo la complejidad pueda generar miles de este tipo de funciones para ir mejorando mi página web.  -->
    </body>
</html>
