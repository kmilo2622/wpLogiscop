<div class="container exclaimer">
	<div class="formulario">
		<form class="form-horizontal" method="post" action="<?php echo get_home_url(). "/mi-cuenta"; ?>">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email *:</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" required="required" id="email" name="email"
                    placeholder="Introduzca su Correo Electrónico *">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Contraseña *:</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" required="required" id="pwd" name="pwd" placeholder="Introduzca su Contraseña *">
				</div>
			</div>
			<!--Submit Button-->
			<div class="form-group" align="center">
				<button type="submit" class="btn btn-success btn-lg">Iniciar Sesion</button>
			</div>
		</form>
	</div>
</div>
