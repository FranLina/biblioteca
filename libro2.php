<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <?php
    include 'libreria.php';
    //if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $isbn = $_GET['isbn'];
    session_start();

    $listadoLibros = (array) $_SESSION['libros'];
    if (count($listadoLibros) != 0) {
        foreach ($listadoLibros as $libro) {
            $lib = new Libro();
            $lib = $libro;
            if ($lib->get_isbn() == $isbn) {
                $string_html = "<h1>Modificacion Libros</h1>"; 
                $string_html .= "<form action='modificacionLibro.php' method='post'>";
                $string_html .= "<label>Isbn: </label>";
                $string_html .= "<input type='text' name='Isbn' value='" . $lib->get_isbn() . "' disabled>
                <br />";
                $string_html .= "<label>Titulo: </label>";
                $string_html .= "<input type='text' name='Titulo' value='" . $lib->get_titulo() . "'>
                <br />";
                $string_html .= "<label>Autor: </label>";
                $string_html .= "<input type='text' name='Autor' value='" . $lib->get_autor() . "'>
                <br />";
                $string_html .= "<label>Fecha Publicación: </label>";
                $string_html .= "<input type='text' name='Fecha_publicacion' value='" . $lib->get_fecha_publicacion() . "'>
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