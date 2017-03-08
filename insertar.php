<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usuarios</title>
  </head>
  <body>

<?php

include "db.php";
$equiponba=new dbNBA();
  if ($equiponba->geterror()==false) {
    ?>
    <?php
$equiponba->insertarEquipo($_POST['nombre'],$_POST['ciudad'],$_POST['conferencia'],$_POST['division']);
$resultado2=$equiponba->devolverUltimoEquipo($_POST['nombre']);
while ($fila1=$resultado2->fetch_assoc()) {

  echo "Datos introducidos correctamente";
  echo "<br>";
  echo "<h2> ULTIMOS DATOS INTRODUCIDOS</h2>";
  echo "Nombre: ".$fila1["Nombre"];
  echo "<br>";
  echo "Ciudad: ".$fila1["Ciudad"];
  echo "<br>";
  echo "Conferencia: ".$fila1["Conferencia"];
  echo "<br>";
  echo "Division: ".$fila1["Division"];
}
}


 ?>

  </body>
</html>
