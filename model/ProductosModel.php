<?php
class ProductosModel extends Model
{
  /*FUNCION Q NOS RETORNA LOS PRODUCTOS */
  function getProductos(){
    $sentencia = $this->db->prepare( "select * from producto");//producto es la tabla de la BBDD
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  /*FUNCION Q NOS GUARDA LOS PRODUCTOS EN LA BASE  DE DATOS */
  function guardarProducto($id_marca,$modelo,$memoria,$banda,$consumo){

    $sentencia = $this->db->prepare('INSERT INTO producto(id_marca,modelo,memoria,banda,consumo) VALUES(?,?,?,?,?)');
    $sentencia->execute([$id_marca,$modelo,$memoria,$banda,$consumo]);
  }
  /*FUNCION Q NOS ELIMINA LOS PRODUCTOS EN LA BASE DE DATOS */
  function borrarProducto($id){
    $sentencia = $this->db->prepare( "delete from producto where id=?");
    $sentencia->execute([$id]);
  }
  /*FUNCION Q NOS AYUDA CON EL FOLTRADO DEVOLVIENDO LAS TRAJETAS CON ES MARCA */
  function getFiltro($id_marca){
    $where="where id_marca ='".$id_marca."'";
    $sentencia = $this->db->prepare( "select * from producto " .$where);
  //producto es la tabla de la BBDD
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    /*FUNCION Q NOS RETORNA UN PRODUCTO  */
    function getProducto($id){
      $where="where id ='".$id."'";
      $sentencia = $this->db->prepare("select * from producto " .$where);//producto es la tabla de la BBDD
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    /*FUNCION DE EDICION DE LOS  PRODUCTOS */
   function editarProducto($modelo,$memoria,$banda,$consumo,$id)
  {
    $sentencia = $this->db->prepare("UPDATE producto SET modelo = '".$modelo."', memoria = '".$memoria."', banda = '".$banda."', consumo = '".$consumo."' WHERE id = '".$id."'");
    $sentencia->execute([$modelo]);
  }
  /*FUNCION Q NOS AGREGGA  MARCAS A LA BASE DE DATOS */
  function addmarca($marca){
    $sentencia = $this->db->prepare('INSERT INTO marca(nombre) VALUES(?)');
    $sentencia->execute([$marca]);
  }
  /*FUNCION Q  ELIMINA MARCAS DE LA BASE DE DATOS */
  public function deleteMarca($id)
  {
    $sentencia = $this->db->prepare( "delete from marca where id=?");
      $sentencia->execute([$id]);
  }
    /*FUNCION Q EDITA MARCAS DE LA BASE DE DATOS */
  public function editMarca($id,$nombre)
  {
    $sentencia = $this->db->prepare("UPDATE marca SET  nombre = '".$nombre."' WHERE id = '".$id."'");
      $sentencia->execute();
  }
    /*FUNCION Q NOS RETORNA UNA MARCA DE LA BASE DE DATOS */
  public function getMarca($id){
    $where="where id ='".$id."'";
    $sentencia = $this->db->prepare("select * from marca " .$where);//producto es la tabla de la BBDD
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>
