{include file="tareas.tpl"}
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