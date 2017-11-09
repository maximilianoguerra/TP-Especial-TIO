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
      'comparativaNormal'=> 'ProductosController#comparativa',
      'agregarProducto'=> 'ProductosController#create',
      'guardarProducto'=> 'ProductosController#store',
      "guardarMarca"=> 'MarcasController#agregarMarca',
      'borrarProducto' => 'ProductosController#destroy',
      'borrarMarca' => 'MarcasController#destroyMarca',
      'filtrar' => 'ProductosController#filtro',
      'editarProducto' => 'ProductosController#edit', //ABRE LA VENTANA PARA EDITAR
      'comienzoEditarMarca' => 'MarcasController#comienzoEditMarca',
      'editarMarca'=>'MarcasController#editarMarca',
      'editar' => 'ProductosController#editar',//EDITA EL PRODUCTO
      'filtrar' => 'ProductosController#filtro',
      'login' => 'LoginController#index',
      'verificarUsuario' => 'LoginController#verify',
      'logout' => 'LoginController#destroy',
      'sesionExpirada' => 'LoginController#expirada',
      'body'=>'ProductosController#traemeElbody',
      'registrarse' => 'LoginController#register',
      'register' => 'LoginController#registrarEnDB'

    ];

}
?>
