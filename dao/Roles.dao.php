

<?php
/*va a tener todas la consultas sql*/

/**
 *
 */
 require_once '../Modelo/Conexion.php';
 require_once '../Modelo/Rol.clase.php';
class RolesDAO
{
  public static function listarDatos(){
    $con = new Conexion();
    $cont = $con->ejecutarConsulta("SELECT * FROM roles");
    $con->cerrarConexion();
    return $cont;
  }
  public static function ingresarDato ($rol){
    $con = new Conexion();
    $con->ejecutarActualizacion("INSERT INTO roles VALUES ('" . $rol->nombre . "')");
    $con->cerrarConexion();
  }
  public static function buscarPorId ($id){
    $con = new Conexion();
    $cont = $con->ejecutarConsulta("SELECT * FROM roles WHERE id = $id");
    $con->cerrarConexion();
    return $cont[0];

  }
  public static function editarDato(){
    
  }
}

 ?>
