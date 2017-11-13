<?php
class UsuariosModel extends Model
{
/*FUNCION PARA TRAER LOS PRODUCTOS DE LA TABLA*/
  function getUsuarios(){
    $sentencia = $this->db->prepare( "select * from usuario");//usuario es la tabla de la BBDD
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>

