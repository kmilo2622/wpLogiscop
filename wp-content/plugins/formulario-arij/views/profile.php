<?php

$_SESSION['pwd'] = $_REQUEST['pwd'];
$_SESSION['email'] = $_REQUEST['email'];

$email = $_REQUEST['email'];
$contrasena = $_REQUEST['pwd'];

global $wpdb;

$table_name = $wpdb->prefix . 'arij_usuarios';
$triesgos = $wpdb->prefix . 'arij_riesgos';
$tciudades = $wpdb->prefix . 'arij_ciudades';
$tdepartamentos = $wpdb->prefix . 'arij_departamentos';
$tafiliaciones = $wpdb->prefix . 'arij_afiliaciones';
$teps = $wpdb->prefix . 'arij_eps';
$tcajas = $wpdb->prefix . 'arij_cajas';
$tbeneficiarios = $wpdb->prefix . 'arij_beneficiarios';
$tpensiones = $wpdb->prefix . 'arij_pensiones';
$testados = $wpdb->prefix . 'arij_estados';
$tinformes = $wpdb->prefix . 'arij_informes';

//Definimos los usuarios

$usuarios = "SELECT * FROM $table_name WHERE email = '$email'";
$user = $wpdb->get_results($usuarios);

if ($user == null) {

	$mensaje = "<div class='alert alert-danger' align='center'>";
	$mensaje .= "<p><strong>Error!</strong> Verifique nuevamente su usuario o contraseña</p>";
	$mensaje .= "</div><br/><br/>";
	$mensaje .= "<div class='form-group' align='center'>";
	$mensaje .=	"<a href='http://aycgrupoempresarial.com/mi-cuenta/login/' class='btn btn-danger btn-lg' role='button'>Volver a Iniciar Sesion</a>";

	echo $mensaje;

} else {

	foreach ($user as $u) {
		$riesgos = "SELECT * FROM $triesgos WHERE id = $u->riesgo";
		$risk = $wpdb->get_results($riesgos);

		$ciudades = "SELECT * FROM $tciudades WHERE codigo = $u->ciudad";
		$city = $wpdb->get_results($ciudades);

		$afiliaciones = "SELECT * FROM $tafiliaciones WHERE id = $u->riesgo";
		$afiliation = $wpdb->get_results($afiliaciones);

		$epSalud = "SELECT * FROM $teps WHERE id = $u->eps";
		$eps = $wpdb->get_results($epSalud);

		$cajaCompensacion = "SELECT * FROM $tcajas WHERE id = $u->caja";
		$caja = $wpdb->get_results($cajaCompensacion);

		$beneficiarios = "SELECT * FROM $tbeneficiarios WHERE id = $u->beneficiario";
		$benefactor = $wpdb->get_results($beneficiarios);

		$pensiones = "SELECT * FROM $tpensiones WHERE id = $u->pension";
		$pension = $wpdb->get_results($pensiones);

		$estadoUsuario = "SELECT * FROM $testados WHERE id = $u->estado";
		$estado = $wpdb->get_results($estadoUsuario);

		$informeUsuario = "SELECT * FROM $tinformes WHERE usuario = $u->id ORDER BY id DESC";
		$informe = $wpdb->get_results($informeUsuario);

		?>

	<div align="center">
		<h1>Hola <?= $u->nombre ?></h1>
		<h2>Bienvenido a nuestro portal!</h2>
	</div>

	<p>
		En este lugar encontras muchas cosas que te pueden interesar, como toda tu informacion personal presente en nuestra base de datos; tambien encontraras tus ultimas facturas y comprobantes de pago de seguridad social, eps y caja de compensacion.
		Si tienes alguna duda o sugerencia no dudes en comunicarte con nosotros en <a href="http://www.johnarij.ml/logiscop/contacto">esta seccion</a>
	</p>
	<hr>
	<h4 align="center"><b>Estado Actual: </b><?php foreach ($estado as $e){ echo $e->estado; } ?></h4>
	<br>
	<p><b>Cedula de Ciudadania: </b><?= $u->cedula ?></p>
	<p><b>Correo Electrónico: </b><?= $u->email ?></p>
	<p><b>Fecha de Nacimiento: </b><?= $u->nacimiento ?></p>
	<p><b>Edad: </b><?= $u->edad ?></p>
	<p><b>Celular: </b><?= $u->celular ?></p>
	<p><b>Telefono: </b><?= $u->telefono ?></p>
	<p><b>Su ciudad: </b><?php foreach ($city as $c){ echo $c->ciudad; } ?></p>
	<h4><b>Datos de su afiliación: </b><?php foreach ($afiliation as $af){ echo $af->afiliacion; } ?></h4>
	<p><b>Precio: </b><?php foreach ($afiliation as $af){ echo $af->precio; } ?></p>
	<p><b>Estado: </b><?php foreach ($estado as $e){ echo $e->estado; } ?></p>
	<p><b>Nivel de Riesgo: </b><?php foreach ($risk as $r){ echo $r->riesgo; } ?></p>
	<p><b>EPS: </b><?php foreach ($eps as $ep){ echo $ep->eps; } ?></p>
	<p><b>Caja de Compensación: </b><?php foreach ($caja as $ep){ echo $ep->caja; } ?></p>
	<p><b>Beneficiarios: </b><?php foreach ($benefactor as $be){ echo $be->beneficiarios; } ?></p>
	<p><b>Pensión: </b><?php foreach ($pension as $pe){ echo $pe->pension; } ?></p>
	<p><b>Enfermedad: </b><?= $u->enfermedad ?></p>
	<hr>
	<h4 align="center">Informes de sus Pagos</h4>
	<p>
	<?php
	foreach ($informe as $i) {?>
		<a href="<?= $i->informe ?>">Informe del mes de <?= $i->mes ?> del año <?= $i->ano ?></a> <br>
	<?php }
	?>
	</p>

	<?php }
}
