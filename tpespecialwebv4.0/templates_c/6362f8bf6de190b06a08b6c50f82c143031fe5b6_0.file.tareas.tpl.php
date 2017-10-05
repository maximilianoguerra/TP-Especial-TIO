<?php
/* Smarty version 3.1.30, created on 2017-10-04 20:23:47
  from "F:\xampp\htdocs\dashboard\TpEspecialWebV3.0\templates\tareas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d527330f52d5_75965205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6362f8bf6de190b06a08b6c50f82c143031fe5b6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\dashboard\\TpEspecialWebV3.0\\templates\\tareas.tpl',
      1 => 1507093816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d527330f52d5_75965205 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="table-responsive">
<table class="table table-striped centradoBlanco">
  <tr>
    <th><p >MARCA</p></th>
    <th><p >MODELO</p></th>
    <th><p >MEMORIA RAM (GB)</p></th>
    <th><p >ANCHO DE BANDA (GB/s)</p></th>
    <th><p >CONSUMO (W)</p></th>
    <th><p >BORRAR</p></th>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
  <tr>
    <td><p><?php echo $_smarty_tpl->tpl_vars['producto']->value['marca'];?>
</p></td>
    <td><p><?php echo $_smarty_tpl->tpl_vars['producto']->value['modelo'];?>
</p></td>
    <td><p><?php echo $_smarty_tpl->tpl_vars['producto']->value['memoria'];?>
</p></td>
    <td><p><?php echo $_smarty_tpl->tpl_vars['producto']->value['banda'];?>
</p></td>
    <td><p><?php echo $_smarty_tpl->tpl_vars['producto']->value['consumo'];?>
</p></td>
    <td>
      <div class="col-xs-12 col-sm-12 col-md-12">
      
        
          <a href="borrarTarea/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
">
           <p><span id="borrar" class="fa fa-trash-o " aria-hidden="true" value="0"></span></p>
          </a>
       
      </div>
    </td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</div>



        <!--<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'tarea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
?>
      <li class="list-group-item">
        <?php echo $_smarty_tpl->tpl_vars['tarea']->value['titulo'];?>
 : <?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
 -->
       <!-- <a href="borrarTarea/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id_tarea'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
       <a href="finalizarTarea/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id_tarea'];?>
"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>-->
<!--    </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>--><?php }
}
