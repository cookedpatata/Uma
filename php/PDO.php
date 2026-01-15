<?php


$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$baseDatos = 'uma';

$conexion = new PDO('mysql:host=' . $servidor . '; dbname=' . $baseDatos, $usuario, $contraseña);
