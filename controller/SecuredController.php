<?php

class SecuredController extends Controller
{

  function __construct()
  {
    session_start();
    if(isset($_SESSION['usuario'])){
      if (time() - $_SESSION['LAST_ACTIVITY'] > 360 ) {
        header('Location: '.LOGOUT);
        die();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
    }
 //   else {
   //   header('Location: '.LOGIN);
     // die();
    //}
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
    if (isset($_SESSION['usuario'])) { // pregunto si tengo un usuario
      $usuario = true;
    }
    $this->view->mostrarProductos($productos, $marcas, $usuario);
  }
}

 ?>
