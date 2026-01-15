<!DOCTYPE html>
<html>

<body>
    <?php
    session_start();
    include "PDO.php";
    ?>
    SQL:<br>
    <?php

    if($_SESSION["cadenaCartas"]!="INSERT INTO cartas (img, nombre, rareza, tipo, Efecto_U)VALUES "){
        insertar($conexion,substr($_SESSION["cadenaCartas"], 0, -1).";");
    }
    if($_SESSION["cadenaEfectos"]!="INSERT INTO efectos (nombre, descripcion)VALUES "){
        insertar($conexion,substr($_SESSION["cadenaEfectos"], 0, -1).";");
    }
    if($_SESSION["cadenaSkills"]!="INSERT INTO skills (nombre, descripcion, skill, aptitud, rareza) VALUES "){
        insertar($conexion,substr($_SESSION["cadenaSkills"], 0, -1).";");
    }

    echo substr($_SESSION["cadenaCartas"], 0, -1).";<br>";
    echo substr($_SESSION["cadenaEfectos"], 0, -1).";<br>";
    echo substr($_SESSION["cadenaSkills"], 0, -1).";<br>";

    $_SESSION["cadenaCartas"] = "INSERT INTO cartas (img, nombre, rareza, tipo, Efecto_U)VALUES ";
    $_SESSION["cadenaEfectos"] = "INSERT INTO efectos (nombre, descripcion)VALUES ";
    $_SESSION["cadenaSkills"] = "INSERT INTO skills (nombre, descripcion, skill, aptitud, rareza) VALUES ";

    ?>
    <br>
    <a href="anadircartas.php">volver</a>
</body>

</html>