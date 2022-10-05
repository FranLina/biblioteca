<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Libro</title>
</head>

<body>
    <form action="altaLibro.php" method="post">
        <label>Isbn: </label>
        <input type="text" name="Isbn">
        <br />
        <label>Titulo: </label>
        <input type="text" name="Titulo">
        <br />
        <label>Autor: </label>
        <input type="text" name="Autor">
        <br />
        <label>Fecha Publicación: </label>
        <input type="text" name="Fecha_publicacion">
        <br />
        <input type="submit" value="Crear" />
    </form>
</body>

</html>