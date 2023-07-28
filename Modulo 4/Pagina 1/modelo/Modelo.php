<?php

class Modelo {
    public static function obtenerImagenYTexto($edad, $interes) {
        if ($edad < 18) {
            // Funciones para menores de edad
            return array(
                "imagen" => "imagen6.jpg",
                "texto" => "Contenido para menores de edad"
            );
        } else {
            // Funciones para mayores de edad
            return array(
                "imagen" => "imagen7.png",
                "texto" => "Contenido para mayores de edad"
            );
        }
    }
}
?>
<!--Francisco Nuñez O.
ingenieria en Informática
Instituto Profesional de Providencia
Porgramacion de Aplicaciones Web
Modulo 4.-->