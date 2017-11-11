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
          {/foreach}  
            <td><p>{$producto['modelo']}</p></td>
            <td><p>{$producto['memoria']}</p></td>
            <td><p>{$producto['banda']}</p></td>
            <td><p>{$producto['consumo']}</p></td>
          </tr>
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
       
     
    </tr>
    </table>
    </div>

<!--***AGREGAR NUEVA IMAGEN*******-->
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 formulario">
        <div class="msj">
          <div class="panel panel-default">

            <div class="panel-body">

              <form href="guardarImagenProducto" class="formFiltrar" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="consumo">Adjuntar Imagen</label>                  
                  <input type="file" class="form-control" id="consumo" name="imagenproducto[]"  value="" multiple></input>
                  {foreach from=$productos item=producto}
                  <input type="text"  name="id_producto" value="{$producto['id']}" hidden="on"></input>
                   {/foreach}  
                </div>
                
                <input type="submit" class="btn btn-default" value="Agregar"></input>
                <div>
                  {if isset($error)}
                  <div class="alert alert-danger" role="alert">{$error}</div>
                  {/if}
                </div>
              </form>

            </div>

          </div>
        </div>
      </div>
    </div>
<!--***FIN AGREGAR NUEVA IMAGEN*******-->

                