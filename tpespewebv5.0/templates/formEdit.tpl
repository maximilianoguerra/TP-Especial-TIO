<form method="POST" class="formFiltrar" href="editar">
  {foreach from=$productos item=producto}
    <input type="text" name="modelo" value="{$producto['modelo']}">
    <input type="text" name="memoria" value="{$producto['memoria']}">
    <input type="text" name="banda"value="{$producto['banda']}">
    <input type="text" name="consumo" value="{$producto['consumo']}">
    <input type="text" name="id_producto" value="{$producto['id']}" hidden="on">
    <button type="submit" class="btn btn-default" href="{$producto['id']}">Editar</button>
  {/foreach}
</form>
