<?php

include 'libreria.php';
$n_socio = $_GET['n_socio'];

session_start();
$nuevoListado = array();
$listadoSocios = (array) $_SESSION['socios'];
for ($i = 0; $i <= count($listadoSocios) - 1; $i++) {
    if ($listadoSocios[$i]->get_n_socio() != $n_socio) {
        array_push($nuevoListado, $listadoSocios[$i]);
    }
}
$_SESSION['socios'] = $nuevoListado;
header('Location: ' . 'listadoSocios.php');
