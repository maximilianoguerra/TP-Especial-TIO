{include file="header.tpl"}
	<div class="tablafondo">
		<!--HOME Presentation -->
		<div class="conthome2">
			<p>Comparativa entre ATI y NVidia</p>

		</div>
		<div class="container">
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th><p class="tacho">MARCA</p></th>
						<th><p class="tacho">MODELO</p></th>
						<th><p class="tacho">MEMORIA RAM</p></th>
						<th><p class="tacho">ANCHO DE BANDA (GB/s)</p></th>
						<th><p class="tacho">CONSUMO (W)</p></th>
						<th><p class="tacho">BORRAR</p></th>
					</tr>
					<tr>
						<td><p class="marca0 tacho"></p></td>
						<td><p class="modelo0 tacho"></p></td>
						<td><p class="memoria0 tacho"></p></td>
						<td><p class="banda0 tacho"></p></td>
						<td><p class="consumo0 tacho"></p></td>
						<td >
							<div class="col-xs-12 col-sm-12 col-md-12"><p class="tacho">
								<button class="botonBorrar" data-id="" name="0" value="0">
									<i id="borrar" class="fa fa-trash-o " aria-hidden="true" value="0"></i>
								</button></p>
							</div>
						</td>
					</tr>
					<tr>
						<td><p class="marca1 tacho"></p></td>
						<td><p class="modelo1 tacho"></p></td>
						<td><p class="memoria1 tacho"></p></td>
						<td><p class="banda1 tacho"></p></td>
						<td><p class="consumo1 tacho"></p></td>
						<td> <div class="col-xs-12 col-sm-12 col-md-12"><p class="tacho">
							<button class="botonBorrar" name="1" value="1">
								<i id="borrar" class="fa fa-trash-o tacho" aria-hidden="true" ></i>
							</button></p>
						</div></td>
					</tr>
					<tr>
						<td><p class="marca2 tacho"></p></td>
						<td><p class="modelo2 tacho"></p></td>
						<td><p class="memoria2 tacho"></p></td>
						<td><p class="banda2 tacho"></p></td>
						<td><p class="consumo2 tacho"></p></td>
						<td> <div class="col-xs-12 col-sm-12 col-md-12"><p class="tacho">
							<button class="botonBorrar" name="2" value="2">
								<i id="borrar" class="fa fa-trash-o tacho" aria-hidden="true"  ></i>
							</button></p>
						</div></td>
					</tr>
					<tr>
						<td><p class="marca3 tacho"></p></td>
						<td><p class="modelo3 tacho"></p></td>
						<td><p class="memoria3 tacho"></p></td>
						<td><p class="banda3 tacho"></p></td>
						<td><p class="consumo3 tacho"></p></td>
						<td> <div class="col-xs-12 col-sm-12 col-md-12"><p class="tacho">
							<button class="botonBorrar" name="3">
								<i id="borrar" class="fa fa-trash-o tacho" aria-hidden="true" ></i>
							</button></p>
						</div></td>
					</tr>
					<tr value=4>
						<td><p class="marca4 tacho"></p></td>
						<td><p class="modelo4 tacho"></p></td>
						<td><p class="memoria4 tacho"></p></td>
						<td><p class="banda4 tacho"></p></td>
						<td><p class="consumo4 tacho"></p></td>
						<td> <div class="col-xs-12 col-sm-12 col-md-12"><p class="tacho">
							<button class="botonBorrar" data-id="">
								<i id="borrar" class="fa fa-trash-o tacho" aria-hidden="true" value="2"></i>
							</button></p>
						</div></td>
					</tr>
					<tr>
						<td><p class="marca5 tacho"></p></td>
						<td><p class="modelo5 tacho"></p></td>
						<td><p class="memoria5 tacho"></p></td>
						<td><p class="banda5 tacho"></p></td>
						<td><p class="consumo5 tacho"></p></td>
						<td> <div class="col-xs-12 col-sm-12 col-md-12"><p class="tacho">
							<button class="botonBorrar" data-id="">
								<i id="borrar" class="fa fa-trash-o tacho" aria-hidden="true" ></i>
							</button></p>
						</div></td>
					</tr>
					<tr>
						<td><p class="marca6 tacho"></p></td>
						<td><p class="modelo6 tacho"></p></td>
						<td><p class="memoria6 tacho"></p></td>
						<td><p class="banda6 tacho"></p></td>
						<td><p class="consumo6 tacho"></p></td>
						<td> <div class="col-xs-12 col-sm-12 col-md-12"><p class="tacho">
							<button class="botonBorrar" data-id="">
								<i id="borrar" class="fa fa-trash-o tacho" aria-hidden="true" ></i>
							</button></p>
						</div></td>
					</tr>
					<tr>
						<td><p class="marca7 tacho"></p></td>
						<td><p class="modelo7 tacho"></p></td>
						<td><p class="memoria7 tacho"></p></td>
						<td><p class="banda7 tacho"></p></td>
						<td><p class="consumo7 tacho"></p></td>
						<td> <div class="col-xs-12 col-sm-12 col-md-12"><p class="tacho">
							<button class="botonBorrar" data-id="">
								<i id="borrar" class="fa fa-trash-o tacho" aria-hidden="true" ></i>
							</button></p>
						</div></td>
					</tr>
					</table>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 formulario">

					<h3>Carga de Datos</h3>
					<div class="msj">
						<div class="panel panel-default">

							<div class="panel-body">
								<form>
									<div class="form-group">
										<label for="group" ><input type="text"  class="form-control" id="grupo" placeholder="Grupo" required /></label>

									</div>
									<div class="form-group">
										<label for="marca" ><input class="form-control"  id="marca" placeholder="Marca" rows="3" required ></label>

									</div>
									<div class="form-group">
										<label for="modelo"><input class="form-control" id="modelo" placeholder="Modelo" rows="3" required ></label>

									</div>
									<div class="form-group">
										<label for="memoria"><input class="form-control"  id="memoria" placeholder="Memoria" rows="3" required ></label>

									</div>
									<div class="form-group">
										<label for="banda"><input class="form-control"  id="banda" placeholder="Ancho de Banda" rows="3" required ></label>

									</div>
									<div class="form-group">
										<label for="mconsumo"><input class="form-control"  id="consumo" placeholder="Consumo" rows="3" required ></label>

									</div>

									<button type="submit" class="btn btn-default"  id="enviar">Guardar</button>
									<button type="button" class="btn btn-default"  id="pedir" name="button">Pedir Datos</button>
									<button type="submit" class="btn btn-default" id="borra" name="button">Borrar</button>
								</form>
							</div>
							<div class="panel-footer">dadad
								<div id="guardarAlert" class="alert" role="alert"></div>
							</div>

						</div>
					</div>


				</div>
			</div>

		</div>
		<!-- scripts js -->

{include file="footer.tpl"}
