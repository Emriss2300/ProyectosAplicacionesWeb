<!DOCTYPE html>
<html>
<head>
    <title>Serie Fibonacci</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>
    <h1>Serie Fibonacci</h1>

    <form method="post" action="">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" min="1" max="99" required>
        <button type="submit">Mostrar Serie</button>
    </form>

    <?php
    function fibonacci($n)
    {
        $serie = [];
        $a = 0;
        $b = 1;

        for ($i = 0; $i < $n; $i++) {
            $serie[] = $a;
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }

        return $serie;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = $_POST['numero'];

        if (is_numeric($numero) && $numero >= 1 && $numero <= 99) {
            echo "<h2>Serie Fibonacci hasta el número $numero:</h2>";

            $serieFibonacci = fibonacci($numero);

            foreach ($serieFibonacci as $numeroFibonacci) {
                echo $numeroFibonacci . ", ";
            }
        } else {
            echo "<p>Ingrese un número válido entre 1 y 99.</p>";
        }
    }
    ?>

</body>
</html>
