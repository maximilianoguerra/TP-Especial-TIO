<?php
include_once('model/TareasModel.php');
include_once('view/TareasView.php');

class TareasController extends Controller
{


  function __construct()
  {
    $this->view = new TareasView();
    $this->model = new MarcasModel();//nueva linea
   /* $this->palabrasProhibidasModel = new PalabrasProhibidasModel();*/
  }

  public function index()
  {
    $marcas = $this->model->getMareas();
    $this->view->mostrarMareas($marcas);
  }
/*
  public function create()
  {
    $this->view->mostrarCrearTareas();
  }

  public function store()
  {
    $modelo = $_POST['modelo'];
    $memoria = $_POST['memoria'];
    $id_marca = $_POST['id_marca'];
      $this->model->guardarTarea($modelo, $memoria, $id_marca);
      header('Location: '.HOME);
  }

  public function destroy($params)
  {
    $id_tarea = $params[0];
    $this->model->borrarTarea($id_tarea);
    header('Location: '.HOME);
  }

  public function finish($params)
  {
    $id_tarea = $params[0];
    $this->model->finalizarTarea($id_tarea);
    header('Location: '.HOME);
  }

  private function tienePalabrasProhibidas($titulo){
    $pprohibidas = $this->palabrasProhibidasModel->getPalabrasProhibidas();
    foreach ($pprohibidas as $palabra) {
      if(strpos($titulo, $palabra['palabra']) !== false)
        return true;
    }
    return false;
  }
  */
}

 ?>
