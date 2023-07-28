<?php

class UserModel {
    private $servername = "localhost";
    private $username = "Francisco1234";
    private $dbpassword = "1234";
    private $dbname = "validar";

    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->dbpassword, $this->dbname);
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }

    public function verifyUserCredentials($usuario, $userpassword) {
        $usuario = $this->conn->real_escape_string($usuario); // Prevenir inyección de SQL
        $userpassword = $this->conn->real_escape_string($userpassword); // Prevenir inyección de SQL
        $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND password = '$userpassword'";
        $result = $this->conn->query($sql);
        return ($result->num_rows == 1);
    }
}

/* Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4. */

