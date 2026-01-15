<?php
$servidor = 'localhost';
$usuario = 'root';
$contraseña = 'toor';
$baseDatos = 'uma';

$conexion = new PDO('mysql:host=' . $servidor . '; dbname=' . $baseDatos, $usuario, $contraseña);

function consulta($conexion,$sql){
    try{
        $consulta= $conexion->prepare($sql);
        $consulta->execute();
    }
    catch(PDOException $e){
        echo "Error: " . $e->getMessage();  
    }
}

function insertar($conexion,$sql){
    try{
        $consulta= $conexion->prepare($sql);
        $consulta->execute();
    }
    catch(PDOException $e){
        echo "Error: " . $e->getMessage();  
    }
}
?>
