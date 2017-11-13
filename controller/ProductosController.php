<?php
include_once('model/ProductosModel.php');
include_once('model/MarcasModel.php');
include_once('view/ProductosView.php');

class ProductosController extends SecuredController
{
  function __construct()
  {
    parent::__construct();
    $this->view = new ProductosView();
    $this->model = new ProductosModel();
    $this->marcasModel = new MarcasModel();
  }

  public function index()
  {
      $usuario=null;
    if ($this->usuario()) {
      $usuario = $_SESSION['usuario'];
    }

    $superAdmin =$this->superAdmin();

    $this->view->mostrarIndex($usuario,$superAdmin);
  }

  public function comparativa()
  {
    $productos = $this->model->getProductos();
    $marcas = $this->marcasModel->getMarcas();

    for ($i=0; $i < count($productos); $i++) {
      $id_marca = $productos[$i]['id_marca'];// puede ser 1, 2, 3, etc son los id que envio con el formulario
      $j=0;
      while (( $j < count($marcas) && (!(isset($productos[$i]['marca']))) ) ) {
        if ($id_marca == $marcas[$j]['id']) {
          $productos[$i]['marca'] = $marcas[$j]['nombre'];
        }
        $j++;
      }
    }
    $usuario = false;
    $superAdmin=false;
    if (isset($_SESSION['usuario'])) { // pregunto si tengo un usuario
      $usuario = true;
      if ($_SESSION['superAdmin']==1) {
        $superAdmin=true;
      }
    }
    $this->view->mostrarProductos($productos, $marcas, $usuario,$superAdmin);
  }

  public function mostrarProducto($value="")
  {
    $usuario = false;
    $superAdmin=false;
    if (isset($_SESSION['usuario'])) { // pregunto si tengo un usuario
      $usuario = true;
      if ($_SESSION['superAdmin']==1) {
        $superAdmin=true;
      }

    }
    $marcas = $this->marcasModel->getMarcas();

    if (isset($_POST['id_producto'])) {
      $id = $_POST['id_producto'];
      $productos=$this->model->getProducto($id);
      $imagenes=$this->model->getImagenes($id);
      $this->view->mostrarDetalleProducto($productos,$marcas,$imagenes,$usuario,$superAdmin);
    }
    else{
      $productos=$this->model->getProducto($value);
      $imagenes=$this->model->getImagenes($value);
      $this->view->mostrarDetalleProducto($productos,$marcas,$imagenes,$usuario,$superAdmin);
    }
  }


  /*MUESTRO EL PARTIAL NVIDIA*/
  public function nvidia()
  {
    $this->view->mostrarNvidia();
  }
  /*MUESTRO EL PARTIAL ATI*/
  public function Ati()
  {
    $this->view->mostrarAti();
  }
  /*FUNCION QUE CONTROLA QUE LAS IMAGENES TENGAN LA EXTENSION PERMITIDA*/

  function getExtensionesImagenesVerificadas($imagenes){

    $extensionesImagenesVerificadas = [];
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

  /*FUNCION Q GUARDA PRODUCTOS*/
  public function store()
  {
    $this->admin();// pregunto si tengo un usuario

    $productos = $this->model->getProductos();
    $marcas = $this->marcasModel->getMarcas();
    $id_marca = $_POST['id_marca'];
    $modelo = $_POST['modelo'];
    $memoria = $_POST['memoria'];
    $banda = $_POST['banda'];
    $consumo = $_POST['consumo'];

    if((isset($_POST['modelo']) && !empty($_POST['modelo'])) &&
      (isset($_POST['memoria']) && !empty($_POST['memoria'])) &&
      (isset($_POST['banda']) && !empty($_POST['banda'])) &&
      (isset($_POST['consumo']) && !empty($_POST['consumo'])))
    {
        if(isset($_FILES['imagenproducto'])){
          $imagenes = $this->getExtensionesImagenesVerificadas($_FILES['imagenproducto']);

          $this->model->guardarProducto($id_marca,$modelo,$memoria,$banda,$consumo, $imagenes);
          $this->comparativa();
        }
    }
    else{
          $this->view->errorCrear("Todos los campos son requeridos", $productos, $marcas);
          $this->comparativa();
        }

  }

   /*FUNCION Q GUARDA IMAGENES*/
  public function storeImg()
  {
    $this->admin();// pregunto si tengo un usuario
      $id = $_POST['id_producto'];
      if(isset($_FILES['imagenproducto'])){
        $imagenes = $this->getExtensionesImagenesVerificadas($_FILES['imagenproducto']);

        $this->model->guardarImagenProducto($id,$imagenes);
        $this->mostrarProducto();
      }

  }


  /*FUNCION Q BORRA PRODUCTOS*/
  public function destroy()
  {
    $this->admin();
    if (isset($_POST['id_producto'])) {

      $id = $_POST['id_producto'];
      $this->model->borrarProducto($id);
      $this->comparativa();
    }

  }

  /*FUNCION Q BORRA IMAGEN DE PRODUCTO*/
  public function destroyImg()
  {
      $this->admin();
      if(isset($_POST['imgpath'])) {
      $this->model->borrarImagenProducto($_POST['imgpath']);
      $this->mostrarProducto($_POST['idProducto']);
    }
  }

  /*FUNCION PARA FILTRAR POR MARCA PRODUCTOS*/
  public function filtro()
  {

    $id_marca = $_POST['id_marca'];
    $productos = $this->model->getFiltro($id_marca);
    $marcas = $this->marcasModel->getMarcas();

    for ($i=0; $i < count($productos); $i++) {
      $id_marca = $productos[$i]['id_marca'];// puede ser 1, 2, 3, etc son los id que envio con el formulario
      $j=0;
      while (( $j < count($marcas) && (!(isset($productos[$i]['marca']))) ) ) {
        if ($id_marca == $marcas[$j]['id']) {
          $productos[$i]['marca'] = $marcas[$j]['nombre'];
        }
        $j++;
      }
    }
    if (isset($_SESSION['usuario'])) { // pregunto si tengo un usuario
      $usuario = true;
      if ($_SESSION['superAdmin']==1) {
        $superAdmin=true;
      }

    }

    $this->view->mostrarProductos($productos, $marcas, $usuario,$superAdmin);
  }

  //ABRE LA PAGINA PARA EDITAR EL PRODUCTO
  public function edit()
  {
    $this->admin();
    if (isset($_POST['id_producto'])) {
      $id = $_POST['id_producto'];
      $productos=$this->model->getProducto($id);
      $this->view->mostraredit($productos);
    }

  }

  //EDITA EL PRODUCTO
  public function editar()
  {
    $this->admin();
    $id = $_POST['id_producto'];
    $modelo = $_POST['modelo'];
    $memoria = $_POST['memoria'];
    $banda = $_POST['banda'];
    $consumo = $_POST['consumo'];
    $this->model->editarProducto($modelo,$memoria,$banda,$consumo,$id);
    $this->comparativa();

  }

  function traemeElbody(){
    $this->view->seeBody();
  }

}

?>
