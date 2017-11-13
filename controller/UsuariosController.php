<?php
include_once('model/UsuariosModel.php');
include_once('view/UsuariosView.php');
class UsuariosController extends SecuredController{
  function __construct()
  {
    parent::__construct();
    $this->usuariosView = new UsuariosView();
    $this->usuariosModel = new UsuariosModel();
  }
  public function mostrarListaUsuarios($value="")
{
  $superAdmin=false;
  if (isset($_SESSION['superAdmin'])) { // pregunto si tengo un usuario
    $superAdmin = true;
  }
  $usuarios = $this->usuariosModel->getUsuarios();
  $this->usuariosView->mostrarUsuarios($usuarios);
}
}
?>