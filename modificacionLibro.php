<?php
include 'libreria.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $listadoLibros = (array) $_SESSION['libros'];
    for ($i = 0; $i <= count($listadoLibros) - 1; $i++) {
        if ($listadoLibros[$i]->get_isbn() == $_REQUEST['Isbn']) {
            //No debe cambiarse el Isbn porque es unico
            //$listadoLibros[$i]->set_isbn($_REQUEST['Isbn']);

            $listadoLibros[$i]->set_autor($_REQUEST['Autor']);
            $listadoLibros[$i]->set_titulo($_REQUEST['Titulo']);
            $listadoLibros[$i]->set_fecha_publicacion($_REQUEST['Fecha_publicacion']);
            $_SESSION['libros'] = $listadoLibros;
            header('Location: ' . 'listadoLibros.php');
        }
    }
}
