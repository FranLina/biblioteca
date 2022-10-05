<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Libros</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <?php
    include 'libreria.php';

    //if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();

    $listadoLibros = (array) $_SESSION['libros'];

    echo "<h1 align='center'>Listado Libros</h1>";
    echo "<form action='libro.php' method='post'>";
    echo "<input type='submit' value='Nuevo Libro' class='boton'>";
    echo "<table width='900px' align='center' border=' 1px solid'>";
    echo "<tr><th>Isbn</th><th>Titulo</th><th>Autor</th><th>Fecha Publicación</th><th>Operaciones</th></tr>";
    if (count($listadoLibros) != 0) {
        foreach ($listadoLibros as $libro) {
            $lib = new Libro();
            $lib = $libro;
            echo "<tr align='center'>";
            echo "<td>" . $lib->get_isbn() . "</td>";
            echo "<td>" . $lib->get_titulo() . "</td>";
            echo "<td>" . $lib->get_autor() . "</td>";
            echo "<td>" . $lib->get_fecha_publicacion() . "</td>";
            echo "<td><input class='botonEd' type='submit' formaction='/biblioteca/libro2.php?isbn=" . $lib->get_isbn() . "' value='Editar'><input class='botonBo' type='submit' value='Borrar' formaction='/biblioteca/borrarLibro.php?isbn=". $lib->get_isbn() . "'></td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    //}
    ?>
</head>

<body style="background-color:#5FEB65;">

</body>

</html>