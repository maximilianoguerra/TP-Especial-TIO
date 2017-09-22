<?php
/* Smarty version 3.1.30, created on 2017-09-22 03:45:51
  from "C:\xampp\htdocs\dashboard\EjemplosWeb2\LiveCoding\db\templates\tareas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c46b4f3d0c00_85852111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cde2e9254260bcc859409922c5fdab30d9968e6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\EjemplosWeb2\\LiveCoding\\db\\templates\\tareas.tpl',
      1 => 1506038907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c46b4f3d0c00_85852111 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\dashboard\\EjemplosWeb2\\LiveCoding\\db\\libs\\plugins\\modifier.truncate.php';
?>
<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'tarea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
?>
      <li class="list-group-item">
        <?php if ($_smarty_tpl->tpl_vars['tarea']->value['completado']) {?>
          <s><?php echo mb_strtoupper(smarty_modifier_truncate($_smarty_tpl->tpl_vars['tarea']->value['titulo'],6), 'UTF-8');?>
 : <?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
</s>
        <?php } else { ?>
            <?php echo mb_strtoupper(smarty_modifier_truncate($_smarty_tpl->tpl_vars['tarea']->value['titulo'],6), 'UTF-8');?>
 : <?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>

        <?php }?>
        <a href="borrarTarea/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id_tarea'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
    </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
