<div class="tituloEdit">
      <p>Editar El Nombre de La Marca</p>
    </div>
<div class="edit">
<form class="formFiltrar" href="editarMarca">
    {foreach from=$marcas item=marca}
  	<p>Marca</p>
    <input type="text" name="nombre" value="{$marca['nombre']}">
    <input type="text" name="id_marca" value="{$marca['id']}" hidden="on">
    <button type="submit" class="btn btn-default" href="{$marca['nombre']}">Editar</button>
  {/foreach}
</form>
</div>
