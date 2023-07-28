<?php
require_once('model.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $userpassword = $_POST['password'];

    $userModel = new UserModel();

    if ($userModel->verifyUserCredentials($usuario, $userpassword)) {
        // Credenciales válidas, el usuario ha iniciado sesión correctamente
        // Redirigir al usuario a pagina.php
        header("Location: interes.php");
        exit();
    } else {
        // Credenciales inválidas, el usuario no puede iniciar sesión
        // Redirigir al usuario a login.html con un mensaje de error
        header("Location: login.php?error=1");
        exit();
    }

    $userModel->closeConnection();
}
?>
<!--Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4.-->