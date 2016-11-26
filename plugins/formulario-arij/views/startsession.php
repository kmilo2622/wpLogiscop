<div class="container exclaimer">
	<div class="formulario">
		<form class="form-horizontal" method="POST" <action="<?php header("Location: http://www.johnarij.ml");  ?>">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email *:</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" required="required" id="email" name="email"
                    value="<?php echo(isset($_POST['reg_email']) ? $_POST['reg_email'] : null); ?>" placeholder="Introduzca su Correo Electrónico *">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Contraseña *:</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" required="required" id="pwd" value="<?php echo(isset($_POST['reg_password']) ? $_POST['reg_password'] : null); ?>" name="pwd" placeholder="Introduzca su Contraseña *">
				</div>
			</div>

			<!--Submit Button-->
			<div class="form-group" align="center">
				<button type="submit" class="btn btn-success btn-lg">Iniciar Sesion</button>
			</div>
		</form>
	</div>
</div>
