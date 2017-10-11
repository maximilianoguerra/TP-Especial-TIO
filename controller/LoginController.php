<?php
include_once('model/LoginModel.php');
include_once('view/LoginView.php');

class LoginController extends Controller
{

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new LoginModel();
  }

  public function index()
  {
    $this->view->mostrarLogin();
  //  echo password_hash('654321', PASSWORD_DEFAULT);//DE ESTA FORMA VEO EL PASSWORD ENCRIPTADO EN SHA1
  //  password: //$2y$10$mX0CJe.TzCawcbgGb1x4h.GLC4ZYlqCtqtjI85vaqmxc/kmNbX9s.//
  }
  /*VERIFICA LOS DATOS DEL USUARIO SEAN CORRECTOS*/
  public function verify()
  {
    $userName = $_POST['usuario'];
    $password = $_POST['password'];

    if(!empty($userName) && !empty($password)){
      $user = $this->model->getUser($userName);
      if((!empty($user)) && password_verify($password, $user[0]['password'])) {
        session_start();
        $_SESSION['usuario'] = $userName;
        $_SESSION['LAST_ACTIVITY'] = time();
        header('Location: '.HOME);
        die();
        $this->controllerProduct->comparativa();
      }
      else{
        echo("User pass error");
      }
    }
  }
/*FINALIZA LA SECION*/
  public function destroy()
  {
    session_start();
    session_destroy();
    header('Location: '.HOME);
    die();
  }
}


?>
