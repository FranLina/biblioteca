<?php
include 'libreria.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $listadoSocios = (array) $_SESSION['socios'];
    for ($i = 0; $i <= count($listadoSocios) - 1; $i++) {
        if ($listadoSocios[$i]->get_n_socio() == $_REQUEST['n_socio']) {
            //No debe cambiarse el nº Socio porque es unico
            //$listadoSocios[$i]->set_n_socio($_REQUEST['n_socio']);

            $listadoSocios[$i]->set_nombre($_REQUEST['Nombre']);
            $listadoSocios[$i]->set_apellidos($_REQUEST['Apellidos']);
            $listadoSocios[$i]->set_telefono($_REQUEST['Telefono']);
            $listadoSocios[$i]->set_direccion($_REQUEST['Direccion']);
            $_SESSION['socios'] = $listadoSocios;
            header('Location: ' . 'listadoSocios.php');
        }
    }
}
