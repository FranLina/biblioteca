<?php
include 'libreria.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $so = new Socio();
    $so->set_n_socio($_REQUEST['n_socio']);
    $so->set_nombre($_REQUEST['Nombre']);
    $so->set_apellidos($_REQUEST['Apellidos']);
    $so->set_telefono($_REQUEST['Telefono']);
    $so->set_direccion($_REQUEST['Direccion']);

    $listadoSocios = (array) $_SESSION['socios'];
    array_push($listadoSocios, $so);
    $_SESSION['socios'] = $listadoSocios;
    header('Location: ' . 'listadoSocios.php');
}
