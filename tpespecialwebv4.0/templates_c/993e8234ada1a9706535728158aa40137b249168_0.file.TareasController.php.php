<?php
/* Smarty version 3.1.30, created on 2017-10-04 06:02:39
  from "C:\xampp\htdocs\dashboard\TpEspecialWebV3.0\controller\TareasController.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d45d5f13fa21_23673621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '993e8234ada1a9706535728158aa40137b249168' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\TpEspecialWebV3.0\\controller\\TareasController.php',
      1 => 1507088558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d45d5f13fa21_23673621 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>include_once('model/TareasModel.php');
include_once('model/MarcasModel.php');
include_once('model/PalabrasProhibidasModel.php');
include_once('view/TareasView.php');

class TareasController extends Controller
{
  private $palabrasProhibidasModel;

  function __construct()
  {
    $this->view = new TareasView();
    $this->model = new TareasModel();
    $this->marcasModel = new MarcasModel();
  }

  public function index()
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
    if(isset($_POST['modelo']) && !empty($_POST['modelo'])){
      $this->model->guardarTarea($id_marca,$modelo,$memoria,$banda,$consumo);
      header('Location: '.HOME);
    }  
    else{
      $this->view->errorCrear("El campo modelo es requerido", $modelo);
    }
  }

  public function destroy($params)
  {
    $id = $params[0];
    $this->model->borrarTarea($id);
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
}

 <?php echo '?>';
}
}
