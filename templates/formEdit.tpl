<div class="tituloEdit">
      <p>Editar características del producto</p>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 formulario">
        <div class="msj">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="edit">
              <form class="formFiltrar" href="editar">
                {foreach from=$productos item=producto}
                  <div class="form-group formulario">
                	<p>Modelo</p>
                  <input type="text" class="form-control" name="modelo" value="{$producto['modelo']}">
                  </div>
                  <div class="form-group formulario">
                  <p>Memoria</p>
                  <input type="text" class="form-control" name="memoria" value="{$producto['memoria']}">
                  </div>
                  <div class="form-group formulario">
                  <p>Banda</p>
                  <input type="text" class="form-control" name="banda" value="{$producto['banda']}">
                  </div>
                  <div class="form-group formulario">
                  <p>Consumo</p>
                  <input type="text" class="form-control" name="consumo" value="{$producto['consumo']}">
                  </div>
                  <input type="text"  name="id_producto" value="{$producto['id']}" hidden="on">
                  </div>
                  <button type="submit" class="btn btn-default" href="{$producto['id']}">Editar</button>
                {/foreach}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
