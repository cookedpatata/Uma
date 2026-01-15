<!DOCTYPE html>
<html>

<body>
    <?php
    session_start();
    include "PDO.php";
    ?>
    SQL:<br>
    <?php

    echo substr($_SESSION["cadenaCartas"], 0, -1).";<br>";
    echo substr($_SESSION["cadenaEfectos"], 0, -1).";<br>";
    echo substr($_SESSION["cadenaSkills"], 0, -1).";<br>";

    $_SESSION["cadenaCartas"] = "INSERT INTO cartas VALUES ";
    $_SESSION["cadenaEfectos"] = "INSERT INTO efectos VALUES ";
    $_SESSION["cadenaSkills"] = "INSERT INTO skills VALUES ";

    ?>
    <br>
    <a href="anadircartas.php">volver</a>
</body>

</html>