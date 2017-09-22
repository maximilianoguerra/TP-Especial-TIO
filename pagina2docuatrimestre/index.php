<?php
/*include_once 'tareas.php';*/
include_once 'libs/Smarty.class.php';
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
home();
function home(){
  $titulo = 'To Do App';
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
  $smarty->display('templates/index.tpl');
}
 ?>
