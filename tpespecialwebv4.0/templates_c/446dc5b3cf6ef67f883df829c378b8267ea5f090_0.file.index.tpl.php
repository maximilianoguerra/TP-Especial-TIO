<?php
/* Smarty version 3.1.30, created on 2017-10-05 23:48:56
  from "F:\xampp\htdocs\dashboard\TpEspecialWebV3.0\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d6a8c8ca9e51_15707202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '446dc5b3cf6ef67f883df829c378b8267ea5f090' => 
    array (
      0 => 'F:\\xampp\\htdocs\\dashboard\\TpEspecialWebV3.0\\templates\\index.tpl',
      1 => 1507240132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tareas.tpl' => 1,
    'file:formCrear.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59d6a8c8ca9e51_15707202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="tablafondo">
  <!--HOME Presentation -->
  <div class="conthome2">
    <p>Comparativa entre ATI y NVidia</p>
  </div>
  <div class="container">
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
</div>

     <?php $_smarty_tpl->_subTemplateRender("file:tareas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:formCrear.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
</div>
</div>
</div>
</body>

<!--<div class="row">
  <div class="col-md-6 col-md-offset-3">-->
  <!--
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
  -->
    <!--
  </div>-->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
