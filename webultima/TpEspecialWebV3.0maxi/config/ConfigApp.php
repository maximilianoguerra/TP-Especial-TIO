<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'TareasController#index',
      'home'=> 'TareasController#index',
      'tareas' => 'TareasController#index',
      'nvidiaboostrap'=> 'TareasController#nvidia',
      'atiboostrap'=> 'TareasController#Ati',
      'comparativa'=> 'TareasController#comparativa',
      'agregarTarea'=> 'TareasController#create',
      'guardarTarea'=> 'TareasController#store',
      'borrarTarea' => 'TareasController#destroy',
      'finalizarTarea' => 'TareasController#finish',
      'filtrar' => 'TareasController#filtro'

    ];

}

 ?>
