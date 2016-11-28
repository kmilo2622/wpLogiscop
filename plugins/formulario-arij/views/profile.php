<?php

$email = $_REQUEST['email'];
$contrasena = $_REQUEST['pwd'];

global $wpdb;

$table = $wpdb->prefix . 'arij_usuarios';

$consulta = "SELECT * FROM $table WHERE email = '$email' AND contraseña = '$contrasena'";
$resultado = $wpdb->get_results($consulta);

foreach ($resultado as $r) { ?>

    <h1 align="center">Hola <?= $r->nombre ?></h1>

    <h2>Bienvenido a nuestro portal</h2>

    <?php } ?>
