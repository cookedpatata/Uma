<!DOCTYPE html>
<html>

<body>
    <?php
    session_start();

    $servidor = 'localhost';
    $usuario = 'J_Centeno';
    $contraseña = 'Contraseña7';
    $baseDatos = 'uma';

    $conexion = new PDO('mysql:host='.$servidor.'; dbname='.$baseDatos , $usuario, $contraseña);
    ?>

    JSON:<br>
    <?php
    echo $_SESSION["cadenaJSON"];
    $_SESSION["cadenaJSON"] = "";
    ?>

    <br>

    SQL:<br>
    <?php
    if (isset($_POST["env_carta"])){

    }
    if (isset($_POST["env_efecto"])){
        
    }
    if (isset($_POST["env_skill"])){
        
    }
    ?>
    <a href="anadircartas.php">volver</a>
</body>

</html>