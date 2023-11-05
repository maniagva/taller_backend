<?php

$server = "localhost";
$user = "root";
$pass = "75103837";
$db = "mi_proyecto";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    echo "fallo la conexion";
    exit();
} else
    echo "Conexion establecida";
?>