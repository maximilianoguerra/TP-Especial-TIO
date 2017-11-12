<div class="tituloEdit">
          <p>Detalle del producto</p>
    </div>
<div class="container">

  <div class="table-responsive">
        <table class="table table-striped centradoBlanco">
          <tr>
            <th><p >MARCA</p></th>
            <th><p >MODELO</p></th>
            <th><p >MEMORIA RAM (GB)</p></th>
            <th><p >ANCHO DE BANDA (GB/s)</p></th>
            <th><p >CONSUMO (W)</p></th>

            {if $usuario}

            {/if}
          </tr>
          {foreach from=$productos item=producto}
          <tr>
          {foreach from=$marcas item=marca}
          {if $marca['id'] == $producto['id_marca']}
            <td><p>{$marca['nombre']}</p></td>
          {/if}
        </tr>
        {foreach from=$productos item=producto}
        <tr>
        {foreach from=$marcas item=marca}
        {if $marca['id'] == $producto['id_marca']}
          <td><p>{$marca['nombre']}</p></td>
        {/if}
        {/foreach}
          <td><p>{$producto['modelo']}</p></td>
          <td><p>{$producto['memoria']}</p></td>
          <td><p>{$producto['banda']}</p></td>
          <td><p>{$producto['consumo']}</p></td>
        </tr>
        {/foreach}
      </table>
    </div>
        <div class="row">
          {foreach from=$imagenes key=index item=imagen}
          <div class="col-md-3 col-xs-6">
            <a href="{$imagen['path']}" target="_blank" class="thumbnail">
              <img data-u="image" src="{$imagen['path']}" class="thumbnail img-rounded" >
            <!--  <img data-u="image" src="{$imagenes[index]['path']}" class="thumbnail img-rounded" >-->
            </a>
          </div>
          {/foreach}
        </table>
  </div>
    <div class="tituloEdit">
        <p>Imagenes</p>
    </div>

    <!--TABLA INICIO-->
    <div class="table-responsive">
    <table class="table">

    <tr>


        <div class="row navbar-default">
              {foreach from=$imagenes key=index item=imagen}
              <div class="detalleProducto">
                <div class="col-md-4 col-xs-6">
                    <a href="{$imagen['path']}" class="thumbnail">
                    <img data-u="image" src="{$imagen['path']}" class="img-thumbnail" >

                    </a>

                    <button href="{$imagen['fk_id_tarea']}" avioneta="avion" caca="cacaEjemplo" class="btn btn-danger btn-xs borrarImagenProducto" type="button" data-imgpath="{$imagen['path']}">Eliminar Imagen</button>

                </div>
                </div>
              {/foreach}
        </div>
        <!-- <button type="button" name="button"></button> -->
        <div >
          <ul class="comentarios">

          </ul>
        </div>

</div>
