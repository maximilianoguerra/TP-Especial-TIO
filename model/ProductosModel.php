<?php
class ProductosModel extends Model
{
  /*FUNCION PARA TRAER LOS PRODUCTOS DE LA TABLA*/
  function getProductos(){
    $sentencia = $this->db->prepare( "select * from producto");//producto es la tabla de la BBDD
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  /*FUNCION PARA AGREGAR  PRODUCTOS A LA TABLA*/
  function guardarProducto($id_marca,$modelo,$memoria,$banda,$consumo){

    $sentencia = $this->db->prepare('INSERT INTO producto(id_marca,modelo,memoria,banda,consumo) VALUES(?,?,?,?,?)');
    $sentencia->execute([$id_marca,$modelo,$memoria,$banda,$consumo]);
  }
  /*FUNCION PARA BORRAR PRODUCTOS DE LA TABLA*/
  function borrarProducto($id){
    $sentencia = $this->db->prepare( "delete from producto where id=?");
    $sentencia->execute([$id]);
  }
  /*FUNCION PARA PARA FILTRAR POR MARCA*/
  function getFiltro($id_marca){
    $where="where id_marca ='".$id_marca."'";
    $sentencia = $this->db->prepare( "select * from producto " .$where);
  //producto es la tabla de la BBDD
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
/*FUNCION PARA TRAER UN PRODUCTO ESPECIFICO DE LA TABLA PRODUCTOS DE LA TABLA*/
function getProducto($id){
  $where="where id ='".$id."'";
  $sentencia = $this->db->prepare("select * from producto " .$where);//producto es la tabla de la BBDD
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
/*FUNCION PARA EDITAR LOS PRODUCTOS DE LA TABLA*/
 function editarProducto($modelo,$memoria,$banda,$consumo,$id)
{
  $sentencia = $this->db->prepare("UPDATE producto SET modelo = '".$modelo."', memoria = '".$memoria."', banda = '".$banda."', consumo = '".$consumo."' WHERE id = '".$id."'");
  $sentencia->execute([$modelo]);
}


}

?>
