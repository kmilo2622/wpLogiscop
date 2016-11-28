<?php
$r = $_REQUEST;

$nombre = $r['nombre'];
$identificacion = $r['identificacion'];
$email = $r['email'];
$contrasena = $r['pwd'];
$vcontraseña = $r['pwd-confirmation'];
$nacimiento = $r['nacimiento'];
$edad = $r['edad'];
$ciudad = $r['city'];
$embarazo = $r['embarazo'];
$enfermedad = $r['enfermedad'];
$celular = $r['celular'];
$telefono = $r['telefono'];
$referido = $r['referido'];
$riesgo = $r['riesgo'];
$afiliacion = $r['afiliacion'];
$epSalud = $r['epSalud'];
$cajaCompensacion = $r['cajaCompensacion'];
$beneficiarios = $r['beneficiarios'];
$pensiones = $r['pensiones'];
$cedula = $r['cedula'];
$acceptedterms = $r['acceptedterms'];

$query = "INSERT INTO `eshos_17705066_ayh`.`ayharij_usuarios` (`id`, `nombre`, `cedula`, `email`, `contraseña`, `nacimiento`, `estado`, `edad`, `celular`, `telefono`, `referido`, `ciudad`, `riesgo`, `afiliacion`, `eps`, `caja`, `beneficiario`, `pension`, `enfermedad`, `updated_at`, `created_at`) VALUES (, CURRENT_TIMESTAMP, '0000-00-00 00:00:00');";
?>

<h1>Hola, <?= $nombre ?></h1>
<p>El registro de tu cédula <?= $identificacion ?> se ha completado exitosamente</p>

<pre>
    <?php print_r($r); ?>
</pre>
