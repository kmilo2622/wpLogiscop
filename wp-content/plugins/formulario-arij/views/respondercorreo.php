<?php
require_once('phpmailer/phpmailer/PHPMailerAutoload.php');
//require_once('phpmailer/phpmailer/class.phpmailer.php');

$mensaje = '<!DOCTYPE html>
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

  <h1>Hola '.$nombre.',</h1>
  <h2>Gracias por Registrarte en AYC Grupo Empresarial</h2>

  <br><br>
  <p>
    Te invitamos a iniciar sesión dando click <a href="http://aycgrupoempresarial.com/mi-cuenta/login/"><strong>aquí</a></strong> para que hasgas el pago de factura y conozcas todo lo relacionado con tu plan escogido.
  </p>

  <p>
    <strong>Documentos Requeridos</strong>
    <br><br>
    <b>Si no tienes Beneficiarios</b> Escaneo o foto de tu cedula de ciudadanía (Si lo hiciste en el momento del registro, no tienes que volverla a enviar)
    <br>
    <b>Si tienes beneficiarios:</b>
    <br><br>
    <strong>Tus Padres: </strong>Cédula de ciudadanía de cada uno y tu registro civil<br/>
    <strong>Tu Cónyugue: </strong>Cédula de ciudadanía<br/>
    <strong>Tus Hijos: </strong>Registro civil. Si son mayores de 7 años, adicional copia de la tarjeta de identidad. Si son mayores de 12 años y serán afiliados a Caja, certificado de estudios.<br/>
  </p>

</body>
</html>';

$correo = new PHPMailer();
$correo->IsSMTP();
$correo->SMTPAuth = true;
$correo->SMTPSecure = '';
$correo->Host = "mx1.hostinger.co";
$correo->Port = 587;
$correo->Username   = "registro@aycgrupoempresarial.com";
$correo->Password   = "grupoempresarial";


$correo->SetFrom("registro@aycgrupoempresarial.com", "AYC Grupo Empresarial - Registros");
$correo->AddReplyTo("registro@aycgrupoempresarial.com", "AYC Grupo Empresarial - Registros");
$correo->AddAddress($email, "AYC Grupo Empresarial - Registros");

$correo->Subject = "Bienvenido " . $nombre . " a AYC Grupo Empresarial";

$correo->MsgHTML($mensaje);
$correo->CharSet = 'UTF-8';

if(!$correo->Send()) {
  echo "Hubo un error: " . $correo->ErrorInfo;
} else {
  echo "Revisa ahora tu bandeja de entrada.";
}
?>
