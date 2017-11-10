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
  public function admin($value='')
  {
    if(!isset($_SESSION['usuario'])){
      header('Location: '.LOGIN);
       die();
    }
  }
}

 ?>
