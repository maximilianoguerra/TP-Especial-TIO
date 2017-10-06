{include file="header.tpl"}
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
      {foreach from=$marcas item=marca}
      <option class="marca" value="{$marca['id']}" name="id_marca">{$marca['nombre']}</option>
      {/foreach}
    </select>
    <button type="submit" class="btn btn-default">Filtrar Marca</button>
  </form>
</div>

     {include file="tareas.tpl"}
    {include file="formCrear.tpl"}
  </div>
</div>
</div>
</div>
</body>

<!--<div class="row">
  <div class="col-md-6 col-md-offset-3">-->
  <!--
    {if isset($error)}
    <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
  -->
    <!--
  </div>-->
{include file="footer.tpl"}
