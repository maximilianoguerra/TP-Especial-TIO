<?php
/* Smarty version 3.1.30, created on 2017-10-05 22:53:54
  from "F:\xampp\htdocs\dashboard\TpEspecialWebV3.0\templates\navTabla.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d69be2319543_42130891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1097fff867317c2ff80f30f16669f359c0c1db0c' => 
    array (
      0 => 'F:\\xampp\\htdocs\\dashboard\\TpEspecialWebV3.0\\templates\\navTabla.tpl',
      1 => 1507236806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tareas.tpl' => 1,
  ),
),false)) {
function content_59d69be2319543_42130891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:tareas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form-group">
<form method="POST" action="filtrar">
		<label for="id_marca">Seleccione una marca</label>

		<select class="marca" name="id_marca">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
			<option class="marca" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id'];?>
" name="id_marca"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</select>
		<button type="submit" class="btn btn-default">Filtrar Marca</button>
	</form>
</div><?php }
}
