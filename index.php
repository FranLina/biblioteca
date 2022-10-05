<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biblioteca</title>
    <?php
    session_start();

    $prueba = array();
    $_SESSION['libros'] = $prueba;
    ?>
  </head>
  <body style="background-color:#5FEB65;">
    <h1>Bilioteca</h1>
    <form action="listadoLibros.php" method="post">
      <input type="submit" value="Libros" />
      <input type="submit" value="Socios" />
    </form>
  </body>
</html>
