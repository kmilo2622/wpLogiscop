<?php
require_once('phpmailer/phpmailer/class.phpmailer.php');

$mensaje = '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro del usuario $nombre</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 {
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 {
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 {
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Nuevo Registro de Usuario en AYC Grupo Empresarial</h3>
        <h3>'.$nombre.'</h3>
    </div>

    <div class="container-fluid bg-2 text-center">
        <h3 class="margin">'.$nombre.'</h3>
        <p>Un Nuevo usuario se ha registrado en la plataforma, te informamos entonces sus datos para que puedas almacenarlo correctamente en tu base de datos personal. </p>
    </div>

    <div class="container-fluid bg-3 text-center">
        <h3 class="margin">Datos Personales</h3><br>
        <div class="row">
            <div class="col-sm-4">
                <p><b>Nombre: </b>'.$nombre.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Correo Electrónico: </b>'.$email.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Cédula: </b>'.$identificacion.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Fecha de Nacimiento: </b>'.$nacimiento.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Edad: </b>'.$edad.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Número de Celular: </b>'.$celular.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Número de Teléfono: </b>'.$telefono.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Enfermedad: </b>'.$enfermedad.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Estado de Embarazo: </b>'.$embarazo.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Código de Referido: </b>'.$referido.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Tipo de Riesgo: </b>'.$riesgo.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Tipo de Afiliación: </b>'.$afiliacion.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>EPS: </b>'.$epSalud.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Caja de Compensación: </b>'.$cajaCompensacion.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Beneficiarios: </b>'.$beneficiarios.'</p>
            </div>
            <div class="col-sm-4">
                <p><b>Pensiones: </b>'.$pensiones.'</p>
            </div>
        </div>
    </div>

    <footer class="container-fluid bg-4 text-center">
        <p>Gracias por confiar en  <a href="http://www.johnarij.ml">John Arij</a></p>
    </footer>


</body>
</html>';

$correo = new PHPMailer();
$correo->SetFrom("registro@aycgrupoempresarial.com", "AYC Grupo Empresarial - Registros");
$correo->AddReplyTo("registro@aycgrupoempresarial.com", "AYC Grupo Empresarial - Registros");
$correo->AddAddress("registro@aycgrupoempresarial.com", "AYC Grupo Empresarial - Registros");

$correo->Subject = "Nuevo Registro de usuario " . $nombre . " AYC Grupo Empresarial";

$correo->MsgHTML($mensaje);
if ($_FILES['cedula']['name'] != null) {
    $correo->AddAttachment(WP_CONTENT_DIR . '/uploads/et_temp/cedula.pdf' );
}
$correo->CharSet = 'UTF-8';

if(!$correo->Send()) {
  echo "Hubo un error: " . $correo->ErrorInfo;
} else {
  echo "Mensaje enviado con exito.";
}
?>
