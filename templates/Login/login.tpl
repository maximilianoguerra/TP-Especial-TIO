      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <form class="formFiltrar" href="verificarUsuario" method="post">
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name ="password" placeholder="Password" required>
            </div>
              <button type="submit" class="btn btn-default">Login</button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4" id="loginError">
          <div class="alert alert-danger" role="alert">Usuario y/o contraseña incorrectas</div>  
        </div>