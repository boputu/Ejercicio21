<?php
class dbNBA
{

  private $conexion;
  private $error=false;


  function __construct()
  {
    $this->conexion= new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
      $this->error=true;
    }
  }
  public function geterror(){
    return $this->error;
  }

  function insertarEquipo($nombre,$ciudad,$conferencia,$division){
  $sqlInsercion="INSERT INTO equipos(Nombre,Ciudad,Conferencia,Division) VALUES ('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
  if (!$this->conexion->query($sqlInsercion)) {
    echo "Fallo en la creación de la tabla: ".$this->conexion->connect_errno;
    return false;
  }
}

public function devolverUltimoEquipo($nombre){
  if($this->error==false){
    $resultado2 = $this->conexion->query("SELECT * FROM equipos WHERE Nombre='".$nombre."'");
    return $resultado2;
  }else{
    return null;
  }
}

}

 ?>
