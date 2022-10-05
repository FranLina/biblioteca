<?php

include 'libreria.php';
$isbn = $_GET['isbn'];

session_start();
$nuevoListado = array();
$listadoLibros = (array) $_SESSION['libros'];
for ($i = 0; $i <= count($listadoLibros) - 1; $i++) {
    if ($listadoLibros[$i]->get_isbn() != $isbn) {
        array_push($nuevoListado, $listadoLibros[$i]);
    }
}
$_SESSION['libros'] = $nuevoListado;
header('Location: ' . 'listadoLibros.php');
