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
  if ($this->superAdmin()) {
    $usuarios = $this->usuariosModel->getUsuarios();
    $this->usuariosView->mostrarUsuarios($usuarios);
  }
}
}
?>
