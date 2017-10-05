<?php
include_once('model/TareasModel.php');
include_once('model/MarcasModel.php');
include_once('view/TareasView.php');

class TareasController extends Controller
{


  function __construct()
  {
    $this->view = new TareasView();
    $this->model = new TareasModel();
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
   $productos = $this->model->getTareas();
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
    $this->view->mostrarTareas($productos, $marcas);
  }
  public function create()
  {
    $this->view->mostrarCrearTareas();
  }

  public function store()
  {
    $id_marca = $_POST['id_marca'];
    $modelo = $_POST['modelo'];
    $memoria = $_POST['memoria'];
    $banda = $_POST['banda'];
    $consumo = $_POST['consumo'];
    /*if(isset($_POST['modelo']) && !empty($_POST['modelo'])){*/
        $productos = $this->model->getTareas();
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
      $this->model->guardarTarea($id_marca,$modelo,$memoria,$banda,$consumo);
      $this->view->guardaTareas($productos,$marcas);
  }

  public function destroy($params)
  {
    $id = $params[0];
    $this->model->borrarTarea($id);
    header('Location: '.Pato);
  }

  public function finish($params)
  {
    $id_tarea = $params[0];
    $this->model->finalizarTarea($id_tarea);
    header('Location: '.HOME);
  }


}

?>
