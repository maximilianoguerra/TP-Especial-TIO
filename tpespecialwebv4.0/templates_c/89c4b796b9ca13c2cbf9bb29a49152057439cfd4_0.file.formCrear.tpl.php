<?php
/* Smarty version 3.1.30, created on 2017-10-04 07:16:00
  from "C:\xampp\htdocs\dashboard\TpEspecialWebV3.0\templates\formCrear.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d46e9046e081_62788182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89c4b796b9ca13c2cbf9bb29a49152057439cfd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\TpEspecialWebV3.0\\templates\\formCrear.tpl',
      1 => 1507094156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d46e9046e081_62788182 (Smarty_Internal_Template $_smarty_tpl) {
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
" name="id_marca"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
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
