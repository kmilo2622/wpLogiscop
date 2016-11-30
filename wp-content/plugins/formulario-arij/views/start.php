<?php
$r = $_REQUEST;

//En este punto se recopila toda la informacion para luego insertarla en la base de datos

$nombre = null;
$identificacion = null;
$email = null;
$contrasena = null;
$vcontrasena = null;
$nacimiento = null;
$edad = null;
$ciudad = null;
$embarazo = null;
$enfermedad = '';
$celular = null;
$telefono = null;
$referido = null;
$riesgo = null;
$afiliacion = null;
$epSalud = null;
$cajaCompensacion = null;
$beneficiarios = null;
$pensiones = null;
$cedula = null;
$acceptedterms = null;

if (isset($r['nombre'])) {
	$nombre = $r['nombre'];
}

if (isset($r['identificacion'])) {
	$identificacion = $r['identificacion'];
}

if (isset($r['email'])) {
	$email = $r['email'];
}

if (isset($r['pwd'])) {
	$contrasena = $r['pwd'];
}

if (isset($r['pwd-confirmation'])) {
	$vcontrasena = $r['pwd-confirmation'];
}

if (isset($r['nacimiento'])) {
	$nacimiento = $r['nacimiento'];
}

if (isset($r['edad'])) {
	$edad = $r['edad'];
}

if (isset($r['city'])) {
	$ciudad = $r['city'];
}

if (isset($r['embarazo'])) {
	$embarazo = $r['embarazo'];
}

if (isset($r['enfermedad']) != null) {
	$enfermedad = $r['enfermedad'];
}

if (isset($r['celular'])) {
	$celular = $r['celular'];
}

if (isset($r['telefono'])) {
	$telefono = $r['telefono'];
}

if (isset($r['referido'])) {
	$referido = $r['referido'];
}

if (isset($r['riesgo'])) {
	$riesgo = $r['riesgo'];
}

if (isset($r['afiliacion'])) {
	$afiliacion = $r['afiliacion'];
}

if (isset($r['epSalud'])) {
	$epSalud = $r['epSalud'];
}

if (isset($r['cajaCompensacion'])) {
	$cajaCompensacion = $r['cajaCompensacion'];
}

if (isset($r['beneficiarios'])) {
	$beneficiarios = $r['beneficiarios'];
}

if (isset($r['pensiones'])) {
	$pensiones = $r['pensiones'];
}

if (isset($r['cedula'])) {
	$cedula = $r['cedula'];
}

if (isset($r['acceptedterms'])) {
	$acceptedterms = $r['acceptedterms'];
}

//Primero se consulta a la base de datos para verificar las existencias de las cuentas

global $wpdb;

$table = $wpdb->prefix . 'arij_usuarios';

$consulta = "SELECT * FROM $table";
$resultado = $wpdb->get_results($consulta);

foreach ($resultado as $valor) {

	if ($email == $valor->email) {

		$mensaje = "<div class='alert alert-danger' align='center'>";
		$mensaje .= "<p><strong>Error!</strong> El correo electronico ingresado ya existe en nuestra base de datos, por favor intente con un email diferente</p>";
		$mensaje .= "</div><br/><br/>";
		$mensaje .= "<div class='form-group' align='center'>";
		$mensaje .=	"<a href='http://www.johnarij.ml/logiscop/mi-cuenta/register/' class='btn btn-danger btn-lg' role='button'>Volver al registro</a>";

		echo $mensaje;

	} elseif ($identificacion == $valor->cedula) {

		$mensaje = "<div class='alert alert-danger' align='center'>";
		$mensaje .= "<p><strong>Error!</strong> Este numero de documento ya se encuentra registrado en nuestra base de datos, por favor intente nuevamente</p>";
		$mensaje .= "</div><br/><br/>";
		$mensaje .= "<div class='form-group' align='center'>";
		$mensaje .=	"<a href='http://www.johnarij.ml/logiscop/mi-cuenta/register/' class='btn btn-danger btn-lg' role='button'>Volver al registro</a>";

		echo $mensaje;

	} else {
		//Aqui se inserta toda la informacion en la base de datos correspondiente

		$wpdb->insert($table, array(
			'nombre' => $nombre,
			'cedula' => $identificacion,
			'email' => $email,
			'contrasena' => $contrasena,
			'nacimiento' => $nacimiento,
			'edad' => $edad,
			'estado' => 2,
			'celular' => $celular,
			'telefono' => $telefono,
			'referido' => $referido,
			'ciudad' => $ciudad,
			'riesgo' => $riesgo,
			'afiliacion' => $afiliacion,
			'eps' => $epSalud,
			'caja' => $cajaCompensacion,
			'beneficiario' => $beneficiarios,
			'pension' => $pensiones,
			'enfermedad' => $enfermedad,
		));

		?>

		<h1>Hola, <?= $nombre ?></h1>
		<p>El registro de tu cédula <?= $identificacion ?> se ha completado exitosamente</p>

		<pre>
			<?php print_r($r); ?>
		</pre>

		<?php die;	}
	}

	?>