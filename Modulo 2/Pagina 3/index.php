<!DOCTYPE html>
<html>

    <!-- creo el encabezado de mi pagina y llamo al archivo css, para poder editar mi pagina desde ahí-->
<head>
    <title>Serie Fibonacci</title>
    <link rel="stylesheet" type="text/css" href="estyles.css">

</head>
<body>
    <h1>Serie Fibonacci</h1>

    <form method="post" action="">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" min="1" max="99" required>
        <button type="submit">Mostrar Serie</button>
    </form>

    <?php
    // Función para generar la serie Fibonacci hasta el número dado, desde el 1 al 99
    function fibonacci($n)
    {
        $serie = []; // Array para almacenar los números de la serie
        $a = 0; // Primer número de la serie
        $b = 1; // Segundo número de la serie

        for ($i = 0; $i < $n; $i++) {
            $serie[] = $a; // Agregar el número actual a la serie
            $c = $a + $b; // Calcular el siguiente número de la serie sumando los dos anteriores
            $a = $b; // Actualizar el primer número con el segundo número
            $b = $c; // Actualizar el segundo número con el siguiente número calculado
        }

        return $serie; // Devuelve la serie Fibonacci generada en pantalla
    }

    // Verifica si se ha enviado el formulario correctamente para obtener los datos ingresados
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = $_POST['numero']; // Obtiene el número ingresado por el usuario

        // Validar que el número sea válido (entre 1 y 99)
        if (is_numeric($numero) && $numero >= 1 && $numero <= 99) {
            echo "<h2>Serie Fibonacci hasta el número $numero:</h2>";

            $serieFibonacci = fibonacci($numero); // Generar la serie Fibonacci

            // Mostrar cada número de la serie
            foreach ($serieFibonacci as $numeroFibonacci) {
                echo $numeroFibonacci . ", ";
            }
        } else {
            echo "<p>Ingrese un número válido entre 1 y 99.</p>"; // Mensaje en pantalla para que el usuario ingrese correctamente el numero solicitado. 
        }
    }
    ?>

</body>
</html>
