<?php
/* Smarty version 3.1.30, created on 2017-10-04 05:57:39
  from "C:\xampp\htdocs\dashboard\TpEspecialWebV3.0\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d45c33b55411_75925894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f8b804771513138056870e54958db74059da07b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\TpEspecialWebV3.0\\templates\\footer.tpl',
      1 => 1507089392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d45c33b55411_75925894 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--FORMULARIO DE CONTACTO-->
<div class="contenedorform" id="contacto">
	<div class="container contactocentrado">
		<h2>GRACIAS POR CONTACTARNOS</h2>
	</div>
	<div class="container">
		<div class="row">

				<div class="col-xs-12 col-sm-6 col-md-6 formulario">
					<div class="espacio">
					<h3>Dirección</h3>
					<p>2701 San Tomas Expressway
						<span>Santa Clara, CA 95050,US</span></p>
						<ul>
							<li>Tel: 1+ (408) 486-2000</li>
							<li>Fax: 1+ (408) 486-2200</li>
							<li><a href="mailto:info@example.com">info@nvidia.com</a></li>
						</ul>
					</div>
				</div>


				<div class="col-xs-12 col-sm-6 col-md-6 formulario">
					<div>
						<h3>Formulario</h3>
						<div class="msj">
							<form>
								<div class="inputs">
									<input type="text" value="Nombre: " placeholder="Nombre: " required="">
								</div>
								<div class="inputs">
									<input type="email" value="E-Mail: " placeholder="E-Mail: " required="">
								</div>
								<div class="inputs">
									<input type="text" value="Teléfono: " placeholder="Teléfono: " required="">
								</div>
								<div class="inputs">
									<textarea type="text" placeholder="Mensaje: " required=""></textarea>
								</div>
								<div class="button">
									<input class="enviar_datos" type="submit" value="ENVIAR" >
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php echo '<script'; ?>
  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
  src="js/js-prueba.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
  src="js/js-abm.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
