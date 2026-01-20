<?php
$servidor = 'localhost';
$usuario = 'root';
$contraseña = 'toor';
$baseDatos = 'uma';

$conexion = new PDO('mysql:host=' . $servidor . '; dbname=' . $baseDatos, $usuario, $contraseña);

function consulta($pdo, $sql, $colum)
{
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $c = 0;
    while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $datos[$colum[$c]] = $fila;
    }
    return $datos;
}

function insertar($conexion, $sql)
{
    try {
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
