<?php
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
define('COMPARATIVA', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/comparativa');

class Controller
{
  protected $view;
  protected $model;
}

 ?>
