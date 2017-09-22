<?php
/* Smarty version 3.1.30, created on 2017-09-22 03:34:42
  from "C:\xampp\htdocs\dashboard\EjemplosWeb2\LiveCoding\db\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c468b2bde373_18993859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21185636c09d2de7ac91493b3781e401ed9606b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\EjemplosWeb2\\LiveCoding\\db\\templates\\index.tpl',
      1 => 1506038907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59c468b2bde373_18993859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de Tareas</h1>
          <div id="tareas">

          </div>
          <form action="agregarTarea" method="post">
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de la tarea">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripcion</label>
              <textarea name="descripcion" id="descripcion" name="descripcion" rows="8" cols="50"></textarea>
            </div>
            <div class="form-group">
              <label for="completada">Completada</label>
              <input type="checkbox" id="completada" name="completada" value="1">
            </div>
            <button type="submit" class="btn btn-default">Crear</button>
          </form>
        </div>
      </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
