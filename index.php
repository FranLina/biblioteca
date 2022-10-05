<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biblioteca</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <?php
    session_start();

    $prueba = array();
    $_SESSION['libros'] = $prueba;
    $_SESSION['socios'] = $prueba;
    ?>
  </head>
  <body style="background-color:#5FEB65;">
    <h1>Biblioteca</h1>
    <form action="listadoLibros.php" method="post">
      <input type="submit" value="Libros" class="boton"/>
      <input type="submit" formaction='/biblioteca/listadoSocios.php' value="Socios" class="boton"/>
    </form>
  </body>
</html>
