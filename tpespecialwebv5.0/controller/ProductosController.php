<?php
include_once('model/ProductosModel.php');
include_once('model/MarcasModel.php');
include_once('view/ProductosView.php');

class ProductosController extends Controller
{
  function __construct()
  {
    $this->view = new ProductosView();
    $this->model = new ProductosModel();
    $this->marcasModel = new MarcasModel();
  }

  public function index()
  {
    $this->view->mostrarIndex();
  }

  public function nvidia()
  {
    $this->view->mostrarNvidia();
  }

  public function Ati()
  {
    $this->view->mostrarAti();
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
    $this->view->mostrarProductos($productos, $marcas);
  }
  public function create()
  {
    $this->view->mostrarCrearProductos();
  }

 public function store()
  {
    $id_marca = $_POST['id_marca'];
    $modelo = $_POST['modelo'];
    $memoria = $_POST['memoria'];
    $banda = $_POST['banda'];
    $consumo = $_POST['consumo'];
    if(isset($_POST['modelo']) && !empty($_POST['modelo'])){
      $this->model->guardarProducto($id_marca,$modelo,$memoria,$banda,$consumo);
      $this->comparativa();    
    }
    else{
      $this->view->errorCrear("El campo modelo es requerido");
    }  
  }

  public function destroy()
  {
     if (isset($_POST['id_producto'])) {

        $id = $_POST['id_producto'];
        $this->model->borrarProducto($id);
        $this->comparativa();
     }
    //$id = $params[0];
    //$this->model->borrarProducto($id);
    //header('Location: '.HOME);
  }

  public function finish($params)
  {
    $id_producto = $params[0];
    $this->model->finalizarProducto($id_producto);
    header('Location: '.HOME);
  }
  
  public function filtro()
  {
  //  var_dump($_POST);

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
  $this->view->mostrarProductos($productos, $marcas);
}

}

?>
