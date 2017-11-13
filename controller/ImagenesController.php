<?php
include_once('model/ProductosModel.php');
include_once('model/MarcasModel.php');
include_once('view/ProductosView.php');
class ImagenesController extends SecuredController
{

  function __construct()
  {
    parent::__construct();
    $this->view = new ProductosView();
    $this->model = new ProductosModel();
    $this->marcasModel = new MarcasModel();
  }
  /*FUNCION QUE CONTROLA QUE LAS IMAGENES TENGAN LA EXTENSION PERMITIDA*/
  function getExtensionesImagenesVerificadas($imagenes){

    $imagenesVerificadas = [];
    for ($i=0; $i < count($imagenes['size']); $i++) {

      //SOPORTA JPEG Y PNG, PARA REDUCIR EL ESPECTRO DE EXTENSIONES
      if($imagenes['size'][$i]>0 && ($imagenes['type'][$i]=="image/jpeg" || $imagenes['type'][$i]=="image/png")){
        $imagen_aux = [];
        $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
        $imagen_aux['name']=$imagenes['name'][$i];
        $imagenesVerificadas[]=$imagen_aux;
      }
      else{
        $this->view->errorCrear("Imagen no soportada / Producto sin imagen");//LA EXTENSION DE LA IMAGEN EJ SI ES BMP NO ANDA
      }
    }
    return $imagenesVerificadas;
  }
  /*FUNCION Q GUARDA IMAGENES*/
  public function storeImg()
  {
    $id = $_POST['id_producto'];
    if ($this->superAdmin()) {
      // var_dump($_FILES['fotos']['size']['0']);
      // die();
      if(isset($_FILES['fotos']) && $_FILES['fotos']['size']['0'] > 0){
        $imagenes = $this->getExtensionesImagenesVerificadas($_FILES['fotos']);


        $this->model->guardarImagenProducto($id,$imagenes);
        $this->mostrarProducto();
      }
      else{
        $this->view->errorCrear("No cargo imagen");
        $this->mostrarProducto();
      }
    }
    else{
      $this->view->errorCrear("No tiene permiso");
      $this->mostrarProducto();
     }
  }
  /*FUNCION Q BORRA IMAGEN DE PRODUCTO*/
  public function destroyImg()
  {
    if ($this->superAdmin()) {
          if(isset($_POST['imgpath'])) {
          $this->model->borrarImagenProducto($_POST['imgpath']);
          $this->mostrarProducto($_POST['idProducto']);
        }
    }
    else{
          $this->view->errorCrear("No tiene permiso");
          $this->mostrarProducto();
    }

  }
}

 ?>
