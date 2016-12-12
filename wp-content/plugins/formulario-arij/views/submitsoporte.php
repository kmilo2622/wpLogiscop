<?php 

require_once('phpmailer/phpmailer/PHPMailerAutoload.php');

$r = $_REQUEST;
$nombre = $r['nombre-contacto'];
$email = $r['email-contacto'];
$asunto = $r['asunto-contacto'];
$mensaje = $r['mensaje-contacto'];

$cuerpo = '<!DOCTYPE html>
<html>
<head>
	<title>Respuesta a su Correo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style>
		body {
			font: 20px Montserrat, sans-serif;
			line-height: 1.8;
		}
		h1, h2{
			text-align: center;
		}
		p {
			font-size: 16px;
		}
		.margin {
			margin-bottom: 45px;
		}
	</style>
</head>
<body>

	<h1>Nuevo Mensaje desde la Página de Contacto</h1>

	<br><br>
	<p>
		Has recibido un nuevo mensaje desde la página de contacto, a continuación toda la información correspondiente:
	</p>

	<p>
		<strong>Nombre: </strong> '.$nombre.'<br/>
		<strong>Correo Electrónico: </strong> '.$correo.'<br/>
		<strong>Asunto: </strong> '.$asunto.'<br/>
		<strong>Mensaje: </strong> '.$mensaje.'<br/>

	</body>
	</html>';

	$correo = new PHPMailer();
	$correo->IsSMTP();
	$correo->SMTPAuth = true;
	$correo->SMTPSecure = '';
	$correo->Host = "mx1.hostinger.co";
	$correo->Port = 587;
	$correo->Username   = "contacto@aycgrupoempresarial.com";
	$correo->Password   = "grupoempresarial";


	$correo->SetFrom("contacto@aycgrupoempresarial.com", "AYC Grupo Empresarial - Registros");
	$correo->AddReplyTo("soporte@aycgrupoempresarial.com", "AYC Grupo Empresarial - Registros");
	$correo->AddAddress("contacto@aycgrupoempresarial.com", "AYC Grupo Empresarial - Registros");

	$correo->Subject = $asunto;

	$correo->MsgHTML($cuerpo);
	$correo->CharSet = 'UTF-8';

	if(!$correo->Send()) {
		echo "Hubo un error: " . $correo->ErrorInfo;
	} else {
		echo 'Mensaje enviado exitosamente; muy pronto nos comunicaremos con usted nuevamente <br/><br/>
		<a href="https://aycgrupoempresarial.com/soporte/" class="btn btn-primary btn-lg" role="button">Volver a Soporte</a>';
	}