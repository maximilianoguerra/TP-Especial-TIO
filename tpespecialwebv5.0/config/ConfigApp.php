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
      'agregarProducto'=> 'ProductosController#create',
      'guardarProducto'=> 'ProductosController#store',
      'borrarProducto' => 'ProductosController#destroy',
      'finalizarProducto' => 'ProductosController#finish',
      'filtrar' => 'ProductosController#filtro'

    ];

}

 ?>
