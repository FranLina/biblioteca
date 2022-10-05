<?php
include 'libreria.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $lib = new Libro();
    $lib->set_isbn($_REQUEST['Isbn']);
    $lib->set_autor($_REQUEST['Autor']);
    $lib->set_titulo($_REQUEST['Titulo']);
    $lib->set_fecha_publicacion($_REQUEST['Fecha_publicacion']);

    $listadoLibros = (array) $_SESSION['libros'];
    array_push($listadoLibros, $lib);
    $_SESSION['libros'] = $listadoLibros;
    header('Location: ' . 'listadoLibros.php');
}
