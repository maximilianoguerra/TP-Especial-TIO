<?php
/* Smarty version 3.1.30, created on 2017-10-04 06:44:15
  from "C:\xampp\htdocs\dashboard\TpEspecialWebV3.0\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d4671f516d46_87609436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02d4e96865f5fcb7eba2a7c5081085f41c4c2c04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\TpEspecialWebV3.0\\templates\\index.tpl',
      1 => 1507092195,
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
function content_59d4671f516d46_87609436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="tablafondo">
  <!--HOME Presentation -->
  <div class="conthome2">
    <p>Comparativa entre ATI y NVidia</p>
  </div>
  <div class="container">
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
