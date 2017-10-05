<?php
/* Smarty version 3.1.30, created on 2017-10-05 22:00:53
  from "F:\xampp\htdocs\dashboard\TpEspecialWebV3.0\templates\formCrear.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d68f756cfe69_75366587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca671d600f05527b1410bcbd3a6f719f5064706d' => 
    array (
      0 => 'F:\\xampp\\htdocs\\dashboard\\TpEspecialWebV3.0\\templates\\formCrear.tpl',
      1 => 1507233651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d68f756cfe69_75366587 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <!--<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
  <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
  <?php }?>
-->
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 formulario">
      <div class="msj">
        <div class="panel panel-default">
          <div class="panel-body">
            <form action="guardarTarea" method="POST">

              <div class="form-group">
                <label for="id_marca">Seleccione una marca</label>

                <select class="marca" name="id_marca">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
                  <option class="marca" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
              </div>
              <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo"  placeholder="Modelo de VGA">
              </div>
              <div class="form-group">
                <label for="memoria">Memoria</label>
                <input type="text" class="form-control" id="memoria" name="memoria"  placeholder="Memoria">
              </div>
              <div class="form-group">
                <label for="banda">Ancho de Banda</label>
                <input type="text" class="form-control" id="banda" name="banda"  placeholder="Ancho de Banda">
              </div>
              <div class="form-group">
                <label for="consumo">Consumo</label>
                <input type="text" class="form-control" id="consumo" name="consumo"  placeholder="Consumo">
              </div>
              <button type="submit" class="btn btn-default">Crear</button>
              <div class="panel-footer">
               <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
               <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
               <?php }?>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div><?php }
}
