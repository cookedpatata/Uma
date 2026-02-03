<?php
include "PDO.php";

function obtenerEfectos($conexion)
{
    $sql = "SELECT nombre FROM efectos";
    return consulta($conexion, $sql, ['nombre']);
}
function obtenerSkills($conexion)
{
    $sql = "SELECT nombre FROM skills";
    return consulta($conexion, $sql, ['nombre']);
}

$accion = $_GET['accion'] ?? '';
if ($accion === 'efectos') {
    echo json_encode(obtenerEfectos($conexion));
}
if ($accion === 'skills') {
    echo json_encode(obtenerSkills($conexion));
}

?>



