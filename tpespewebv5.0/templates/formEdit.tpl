<form class="formFiltrar" href="editar">
  {foreach from=$productos item=producto}
    <input type="text" name="" value="{$producto['modelo']}">
    <input type="number" name="" value="{$producto['memoria']}">
    <input type="number" name="" value="{$producto['banda']}">
    <input type="number" name="" value="{$producto['consumo']}">
    <button type="submit" name="button"  href="{$producto['id']}">Editar</button>
  {/foreach}

</form>
