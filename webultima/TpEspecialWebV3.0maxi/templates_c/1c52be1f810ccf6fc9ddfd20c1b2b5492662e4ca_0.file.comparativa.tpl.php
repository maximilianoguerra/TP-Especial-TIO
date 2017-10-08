<?php
/* Smarty version 3.1.30, created on 2017-10-06 16:14:31
  from "C:\xampp\htdocs\dashboard\TpEspecialWebV3.0maxi\templates\comparativa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d78fc7542723_33191003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c52be1f810ccf6fc9ddfd20c1b2b5492662e4ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\TpEspecialWebV3.0maxi\\templates\\comparativa.tpl',
      1 => 1507299260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d78fc7542723_33191003 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="reemplazo">


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
  <input type="submit" id="filtro" class="btn btn-default " value="Filtrar Marca">

</form>
</div>
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

  </div>
</div>
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

              <input type="submit" class="btn btn-default " name="" value="Crear">
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
 </div>


</div>
</div>
</div>
<?php }
}
