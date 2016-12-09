<?php
/*
$cedula
*/
$to = 'juancamiloarroyaverico@gmail.com';
$subject = 'Registro de usuario '.$nombre;
$message = '<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hola</title>
<style>
h3{
    color: rgba(123, 0, 0, 1);
}
</style>
</head>
<body>
<h3>Se a creado el usuario '.$nombre.' con los siguientes datos:</h3>
<ul style="list-style-type: none; margin: 0; padding: 0; background-color: #fff;">
<li style="line-height: 300%;">
<span style="font-weight: bold; ">Cedula: </span><span>'.$identificacion.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Fecha de nacimiento: </span><span>'.$nacimiento.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Edad: </span><span>'.$edad.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Email: </span><span>'.$email.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Celular: </span><span>'.$celular.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Telèfono: </span><span>'.$telefono.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Ciudad: </span><span>'.$ciudad.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Estado de embarazo: </span><span>'.$embarazo.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Tipo de enfernedad: </span><span>'.$enfermedad.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Còdigo de referido: </span><span>'.$referido.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Tipo de riesgo: </span><span>'.$riesgo.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Còdigo de afiliaciòn: </span><span>'.$afiliacion.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Còdigo de EPS: </span><span>'.$epSalud.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Còdigo de caja de compensaciòn: </span><span>'.$cajaCompensacion.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Còdigo de Beneficiario: </span><span>'.$beneficiarios.'</span>
</li>
<li style="line-height: 300%;">
<span style="font-weight: bold;">Còdigo de Pensiòn: </span><span>'.$pensiones.'</span>
</li>
</ul>
</body>
</html>';

$attachments = array( WP_CONTENT_DIR . '/plugins/formulario-arij/cedulas/cedula.pdf' );
//$attachments = array( WP_CONTENT_DIR . '/cedulas' .'/'. $cedula);

echo $cedula .  "<br />";
print_r($attachments);

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <juancamiloarroyaverico@gmail.com>" . "\r\n";
$headers .= "Cc: juancamiloarroyaverico@gmail.com" . "\r\n";
wp_mail( $to, $subject, $message, $headers, $attachments );
//wp_mail( $to, $subject, $message, $headers);
?>
