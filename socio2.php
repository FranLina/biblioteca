<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Socio</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <?php
    include 'libreria.php';
    //if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $n_socio = $_GET['n_socio'];
    session_start();

    $listadoSocios = (array) $_SESSION['socios'];
    if (count($listadoSocios) != 0) {
        foreach ($listadoSocios as $socio) {
            $so = new Socio();
            $so = $socio;
            if ($so->get_n_socio() == $n_socio) {
                $string_html = "<h1>Modificacion Socios</h1>"; 
                $string_html .= "<form action='modificacionSocio.php' method='post'>";
                $string_html .= "<label>nº Socio: ". $so->get_n_socio() ."</label>";
                $string_html .= "<input type='hidden' name='n_socio' value='" . $so->get_n_socio() . "'>
                <br />";
                $string_html .= "<label>Nombre: </label>";
                $string_html .= "<input type='text' name='Nombre' value='" . $so->get_nombre() . "'>
                <br />";
                $string_html .= "<label>Apellidos: </label>";
                $string_html .= "<input type='text' name='Apellidos' value='" . $so->get_apellidos() . "'>
                <br />";
                $string_html .= "<label>Teléfono: </label>";
                $string_html .= "<input type='text' name='Telefono' value='" . $so->get_telefono() . "'>
                <br />";
                $string_html .= "<label>Dirección: </label>";
                $string_html .= "<input type='text' name='Direccion' value='" . $so->get_direccion() . "'>
                <br />";
                $string_html .= "<input type='submit' value='Editar' class='botonEd'/>";
                $string_html .= "</form>";
                
                echo $string_html;
            }
        }
    }
    //}
    ?>
</head>
<body style="background-color:#5FEB65;">
</body>

</html>