<?php

include 'libreria.php';
$isbn = $_GET['isbn'];

session_start();
$posicion;
$listadoLibros = (array) $_SESSION['libros'];
for ($i = 0; $i <= count($listadoLibros) - 1; $i++) {
    if ($listadoLibros[$i]->get_isbn() == $isbn) {
        $posicion = $i;
    }
}
unset($listadoLibros[$posicion]);
$_SESSION['libros'] = $listadoLibros;
header('Location: ' . 'listadoLibros.php');
