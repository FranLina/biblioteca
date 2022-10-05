<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Socios</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">

    <?php
    include 'libreria.php';

    //if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();

    $listadoSocios = (array) $_SESSION['socios'];

    echo "<h1 align='center'>Listado Socios</h1>";
    echo "<form action='socio.php' method='post'>";
    echo "<input type='submit' value='Nuevo Socio' class='boton'>";
    echo "<table width='900px' align='center' border=' 1px solid'>";
    echo "<tr><th>nº Socio</th><th>Nombre</th><th>Apellidos</th><th>Teléfono</th><th>Dirección</th><th>Operaciones</th></tr>";
    if (count($listadoSocios) != 0) {
        foreach ($listadoSocios as $socio) {
            $so = new Socio();
            $so = $socio;
            echo "<tr align='center'>";
            echo "<td>" . $so->get_n_socio() . "</td>";
            echo "<td>" . $so->get_nombre() . "</td>";
            echo "<td>" . $so->get_apellidos() . "</td>";
            echo "<td>" . $so->get_telefono() . "</td>";
            echo "<td><input class='botonEd' type='submit' formaction='/biblioteca/libro2.php?isbn=" . $lib->get_isbn() . "' value='Editar'><input class='botonBo' type='submit' value='Borrar' formaction='/biblioteca/borrarLibro.php?isbn=" . $lib->get_isbn() . "'></td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    //}
    ?>

</head>

<body style="background-color:rgb(115, 37, 216);">

</body>

</html>