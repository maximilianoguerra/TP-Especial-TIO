<div class="tituloEdit">
          <p>Lista de Usuarios</p>
    </div>
<div class="container">

<div class="table-responsive">
        <table class="table table-striped centradoBlanco">
          <tr>
            <th><p>USUARIO</p></th>
            <th><p>NOMBRE</p></th>
            <th><p>APELLIDO</p></th>
          </tr>
          {foreach from=$usuarios item=usuario}
          <tr>
            <td><p>{$usuario['usuario']}</p></td>
            <td><p>{$usuario['nombre']}</p></td>
            <td><p>{$usuario['apellido']}</p></td>
          </tr>
          {/foreach}
        </table>
  </div>
</div>  