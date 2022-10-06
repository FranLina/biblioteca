<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Socio</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color:#5FEB65;">
    <h1>Alta Socios</h1>
    <form action="altaSocio.php" method="post">
        <label>nº Socio: </label>
        <input type="text" name="n_socio">
        <br />
        <label>Nombre: </label>
        <input type="text" name="Nombre">
        <br />
        <label>Apellidos: </label>
        <input type="text" name="Apellidos">
        <br />
        <label>Teléfono: </label>
        <input type="text" name="Telefono">
        <br />
        <label>Dirección: </label>
        <input type="text" name="Direccion">
        <br />
        <input type="submit" value="Crear" class="boton"/>
    </form>
</body>

</html>