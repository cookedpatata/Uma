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

    $datos = [];

    while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $filaFiltrada = [];

        foreach ($colum as $col) {
            if (isset($fila[$col])) {
                $filaFiltrada[$col] = $fila[$col];
            }
        }

        $datos[] = $filaFiltrada;
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
