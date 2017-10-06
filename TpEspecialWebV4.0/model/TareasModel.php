<?php
class TareasModel extends Model
{
  function getTareas(){
    $sentencia = $this->db->prepare( "select * from producto");//producto es la tabla de la BBDD
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getFiltro($id_marca){
    $where="where id_marca ='".$id_marca."'";
    $sentencia = $this->db->prepare( "select * from producto " .$where);
    //producto es la tabla de la BBDD
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function guardarTarea($id_marca,$modelo,$memoria,$banda,$consumo){
    $sentencia = $this->db->prepare('INSERT INTO producto(id_marca,modelo,memoria,banda,consumo) VALUES(?,?,?,?,?)');
    $sentencia->execute([$id_marca,$modelo,$memoria,$banda,$consumo]);
  }

  function borrarTarea($id){ 
    $sentencia = $this->db->prepare( "delete from producto where id=?");
    $sentencia->execute([$id]);
  }

  function finalizarTarea($id_producto)
  {
    $sentencia = $this->db->prepare( "update producto set completado=1 where id_producto=?");
    $sentencia->execute([$id_producto]);
  }

}

 ?>
