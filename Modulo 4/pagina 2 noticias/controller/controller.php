<?php
// Primero, incluyo el archivo del modelo para poder interactuar con la base de datos.
require_once 'model.php';

// Ahora, definiré la función para mostrar la página principal de noticias.
function mostrarNoticias() {
    // Obtengo las noticias llamando a la función del modelo.
    $noticias = obtenerNoticias();

    // A continuación, cargo la vista de la página principal y le paso las noticias obtenidas del modelo.
    include 'index.php';
}

// Aquí, tengo la función para mostrar el formulario de edición de una noticia específica.
function mostrarFormularioEdicion($id) {
    // Obtengo la noticia con el ID especificado llamando a la función del modelo.
    $noticia = obtenerNoticiaPorID($id);

    // Luego, cargo la vista del formulario de edición y le paso los datos de la noticia obtenida del modelo.
    include 'edit.php';
}

// En esta función, manejo la actualización de una noticia en la base de datos.
function actualizarNoticia($id, $fecha, $titular, $descripcion, $imagen_ruta) {
    // Llamo a la función del modelo para actualizar la noticia y obtengo el resultado.
    $resultado = actualizarNoticia($id, $fecha, $titular, $descripcion, $imagen_ruta);

    // Si la actualización fue exitosa, redirijo a la página de administración de noticias.
    if ($resultado) {
        header('Location: admin.php');
    } else {
        // En caso de que falle la actualización, muestro un mensaje de error.
        echo "Error al actualizar la noticia.";
    }
}

// La siguiente función es para eliminar una noticia de la base de datos.
function eliminarNoticia($id) {
    // Llamo a la función del modelo para eliminar la noticia y obtengo el resultado.
    $resultado = eliminarNoticia($id);

    // Si la eliminación fue exitosa, redirijo a la página de administración de noticias.
    if ($resultado) {
        header('Location: admin.php');
    } else {
        // Si la eliminación falla, muestro un mensaje de error.
        echo "Error al eliminar la noticia.";
    }
}

// Ahora, defino la función para mostrar el formulario de creación de una nueva noticia.
function mostrarFormularioCreacion() {
    // Cargo la vista del formulario de creación.
    include 'create.php';
}

// Por último, implemento la función para insertar una nueva noticia en la base de datos.
function insertarNoticia($fecha, $titular, $descripcion, $imagen_ruta) {
    // Llamo a la función del modelo para insertar la nueva noticia y obtengo el resultado.
    $resultado = insertarNoticia($fecha, $titular, $descripcion, $imagen_ruta);

    // Si la inserción fue exitosa, redirijo a la página de administración de noticias.
    if ($resultado) {
        header('Location: admin.php');
    } else {
        // Si la inserción falla, muestro un mensaje de error.
        echo "Error al crear la noticia.";
    }
}

// A continuación, manejo las acciones enviadas desde la vista y ejecuto las funciones correspondientes.

// Si se ha especificado una acción en la URL.
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // Según la acción especificada, ejecuto las funciones correspondientes.
    switch ($action) {
        case 'edit':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                // Muestro el formulario de edición para la noticia especificada.
                mostrarFormularioEdicion($id);
            }
            break;

        case 'update':
            if (isset($_POST['id']) && isset($_POST['fecha']) && isset($_POST['titular']) && isset($_POST['descripcion'])) {
                $id = $_POST['id'];
                $fecha = $_POST['fecha'];
                $titular = $_POST['titular'];
                $descripcion = $_POST['descripcion'];
                $imagen_ruta = '';

                // Manejo de la imagen subida.
                if ($_FILES['imagen']['tmp_name'] != '') {
                    $imagen_ruta = 'uploads/' . $_FILES['imagen']['name'];
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen_ruta);
                }

                // Actualizo la noticia en la base de datos.
                actualizarNoticia($id, $fecha, $titular, $descripcion, $imagen_ruta);
            }
            break;

        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                // Elimino la noticia especificada.
                eliminarNoticia($id);
            }
            break;

        case 'create':
            // Muestro el formulario de creación de una nueva noticia.
            mostrarFormularioCreacion();
            break;

        case 'insert':
            if (isset($_POST['fecha']) && isset($_POST['titular']) && isset($_POST['descripcion']) && isset($_FILES['imagen'])) {
                $fecha = $_POST['fecha'];
                $titular = $_POST['titular'];
                $descripcion = $_POST['descripcion'];
                $imagen_ruta = '';

                // Manejo de la imagen subida.
                if ($_FILES['imagen']['tmp_name'] != '') {
                    $imagen_ruta = 'uploads/' . $_FILES['imagen']['name'];
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen_ruta);
                }

                // Inserto la nueva noticia en la base de datos.
                insertarNoticia($fecha, $titular, $descripcion, $imagen_ruta);
            }
            break;

        default:
            // Si no se especifica una acción válida, muestro la página principal de noticias.
            mostrarNoticias();
            break;
    }
} else {
    // Si no se ha especificado ninguna acción, muestro la página principal de noticias.
    mostrarNoticias();
}

/* Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4. */