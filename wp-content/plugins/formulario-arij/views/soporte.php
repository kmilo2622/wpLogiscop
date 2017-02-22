<div class="content">
	<p>
		AYC grupo empresarial le da la bienvenida a la herramienta de soporte, atendemos sus inquietudes o sugerencias acerca de nuestro servicio
	</p>
	<hr>
	<div id="informacion">
		<p class="col-sm-6">
			<span class="fa fa-home"></span>
			Bogotá: Crr 17 B no. 111 Of. 201. <br>
			<span class="fa fa-envelope"></span>
			<a href="mailto:soporte@aycgrupoempresarial.com">
			soporte@aycgrupoempresarial.com</a>  <br>
			<span class="fa fa-envelope"></span>
			<a href="mailto:contacto@aycgrupoempresarial.com">
			contacto@aycgrupoempresarial.com</a>  <br>
			<span class="fa fa-envelope"></span>
			<a href="mailto:aycgrupoempresarial2017@gmail.com">
			aycgrupoempresarial2017@gmail.com</a>  <br>
		</p>
		<p class="col-sm-6">
			<span class="fa fa-phone-square"></span>
			Teléfono: <a href="tel:4764805">476 4805</a><br>
			<span class="fa fa-phone-square"></span>
			Celular: <a href="tel:3219283242">321 928 3242</a><br>
			<span class="fa fa-facebook-official"></span>
			<a href="https://www.facebook.com/aycgrupoempresarial/">AYC Grupo Empresarial</a><br>
			<span class="fa fa-hand-o-up"></span>
			<a href="http://aycgrupoempresarial.com">AYC Grupo Empresarial</a><br>
		</p>
	</div>
	<div align="center">
		<br><br><br><br>
		<hr>
		<h4>Horarios de Atención Presencial</h4>
		<span class="fa fa-calendar"></span>
		Lunes a Viernes: 8:00 am a 5:00 pm <br>
		<span class="fa fa-calendar"></span>
		Sábados: 9:00 am a 1:00 pm
	</div>
	<br>
	<div class="contact-form">
		<form class="form-horizontal" method="POST" action="<?php echo get_home_url(). "/soporte/submit"; ?>">

			<div class="alert alert-info">
				<strong>Recuerda!</strong> Todos los datos marcados con asterisco ( * ) Son obligatorios.
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Nombres y Apellidos *:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" required="required" id="nombre-contacto" name="nombre-contacto" placeholder="Digite sus nombres completos">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Correo Electrónico *:</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" required="required" id="email-contacto" name="email-contacto" placeholder="Introduzca Correo Electrónico">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Asunto *:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" required="required" id="asunto-contacto" name="asunto-contacto" placeholder="¿Por qué se comunica con nosostros?">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Mensaje *:</label>
				<div class="col-sm-9">
					<textarea class="form-control" required="required" rows="5" id="mensaje-contacto" name="mensaje-contacto" placeholder="Introduzca aquí su Mensaje"></textarea>
				</div>
			</div>
			<div class="form-group" align="center">
				<div class="col-sm-offset-2 col-sm-9">
					<button type="submit" class="btn btn-success btn-lg">Enviar Mensaje</button>
				</div>
			</div>
		</form>
	</div>
</div>
