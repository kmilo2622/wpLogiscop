<?php

$_SESSION['pwd'] = $_REQUEST['pwd'];
$_SESSION['email'] = $_REQUEST['email'];

$email = $_REQUEST['email'];
$contrasena = $_REQUEST['pwd'];

global $wpdb;

$table = $wpdb->prefix . 'arij_usuarios';

$consulta = "SELECT * FROM $table WHERE email = '$email' AND contrasena = '$contrasena'";
$resultado = $wpdb->get_results($consulta);

if ($resultado == null) {

	$mensaje = "<div class='alert alert-danger' align='center'>";
	$mensaje .= "<p><strong>Error!</strong> Verifique nuevamente su usuario o contraseña</p>";
	$mensaje .= "</div><br/><br/>";
	$mensaje .= "<div class='form-group' align='center'>";
	$mensaje .=	"<a href='http://www.johnarij.ml/logiscop/mi-cuenta/login/' class='btn btn-danger btn-lg' role='button'>Volver a Iniciar Sesion</a>";

	echo $mensaje;

} else {

	foreach ($resultado as $r) { ?>

	<div align="center">
		<h1>Hola <?= $r->nombre ?></h1>
		<h2>Bienvenido a nuestro portal!</h2>
	</div>

	<p>
		En este lugar encontras muchas cosas que te pueden interesar, como toda tu informacion personal presente en nuestra base de datos; tambien encontraras tus ultimas facturas y comprobantes de pago de seguridad social, eps y caja de compensacion.
		Si tienes alguna duda o sugerencia no dudes en comunicarte con nosotros en <a href="http://www.johnarij.ml/logiscop/contacto">esta seccion</a>
	</p>
	<hr>
	<p><b>Cedula de Ciudadania: </b><?= $r->cedula ?></p>

	<?php }
}