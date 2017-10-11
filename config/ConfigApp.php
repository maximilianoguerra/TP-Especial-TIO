<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'ProductosController#index',
      'home'=> 'ProductosController#index',
      'productos' => 'ProductosController#index',
      'nvidiaboostrap'=> 'ProductosController#nvidia',
      'atiboostrap'=> 'ProductosController#Ati',
      'comparativa'=> 'ProductosController#comparativa',
      'body'=>'ProductosController#traemeElbody',
      // 'comparativaNormal'=> 'ProductosController#comparativa',
      'agregarProducto'=> 'ProductosController#create',
      'guardarProducto'=> 'ProductosController#store',
      "guardarMarca"=> 'ProductosController#agregarMarca',
      'borrarProducto' => 'ProductosController#destroy',
      'borrarMarca' => 'ProductosController#destroyMarca',
      'finalizarProducto' => 'ProductosController#finish',
      'filtrar' => 'ProductosController#filtro',
      'editarProducto' => 'ProductosController#edit',
      'comienzoEditarMarca' => 'ProductosController#comienzoEditMarca',
      'editarMarca'=>'ProductosController#editarMarca',
      'editar' => 'ProductosController#editar',
      'filtrar' => 'ProductosController#filtro',
      'login' => 'LoginController#index',
      'verificarUsuario' => 'LoginController#verify',
      'logout' => 'LoginController#destroy'
    ];

}
?>
