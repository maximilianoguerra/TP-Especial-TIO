<div class="tituloEdit">
<<<<<<< HEAD
  <p>Editar el nombre de la marca</p>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 formulario">
    <div class="msj">
      <div class="panel panel-default">

        <div class="panel-body">
            <div class="edit">
              <form class="formFiltrar" href="editarMarca">
                {foreach from=$marcas item=marca}

                <p>Marca</p>
                <input type="text"  class="form-control" name="nombre" value="{$marca['nombre']}">

                <input type="text" name="id_marca" value="{$marca['id']}" hidden="on">
                <button type="submit" class="btn btn-default" href="{$marca['nombre']}">Editar</button>
                {/foreach}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
=======
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
>>>>>>> 4d67bf810ff685b44ac1ae48aef1dbf38cdb4b78
