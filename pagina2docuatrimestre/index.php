<?php
include_once 'libs/Smarty.class.php';
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');


function home()
{
  $titulo = 'Tarjetas Graficas';
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
  $smarty->display('templates/index.tpl');
}


function mostrarNvidia(){
  $titulo = 'Historia Nvidia';
  $smarty = new Smarty();
  $smarty->assign('nvidiaboostrap',$titulo);
  $smarty->display('templates/nvidiaboostrap.tpl');
}
function mostrarAti(){
  $titulo = 'Historia ATI';
  $smarty = new Smarty();
  $smarty->assign('atiboostrap',$titulo);
  $smarty->display('templates/atiboostrap.tpl');
}
function mostrarComparativa(){
  $titulo = 'Comparativa';
  $smarty = new Smarty();
  $smarty->assign('comparativa',$titulo);
  $smarty->display('templates/comparativa.tpl');
}

 ?>
