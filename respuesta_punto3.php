<?php
if (isset($_GET['mostrar'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cedula'];

    echo
        'Nombre: ' . $nombre . '<br>' .
        'Apellido: ' . $apellido . '<br>' .
        'Cedula: ' . $cedula . '<br>';
}
?>