<?php
/**
 *abre y cerra conexion con base de datos y tambien ejecuta las consultas
 */
class Conexion
{
  private $servidor;
  private $usuario;
  private $clave;
  private $bdatos;
  private $conexion;

  public function __construct()
  {
    $this->servidor = "localhost";
    $this->usuario = "root";
    $this->clave = "";
    $this->bdatos = "base";

    $this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->bdatos);
  }

  public function ejecutarConsulta($sql){
    $contenedor = $this->conexion->query($sql);
    return $contenedor->fetch_all();
  }

  public function ejecutarActualizacion($sql){
    $$this->conexion->query($sql);

  }

  public function cerrarConexion(){
    $this->conexion->close();

  }

}

 ?>
