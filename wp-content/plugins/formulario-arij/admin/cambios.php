<?php

$r = $_REQUEST;


$codigoactualizar = null;
$statusactualizar = null;

$codigoinforme = null;
$mes = null;
$ano = null;
$link = null;

if (isset($r['codigoactualizar'])) {
	$codigoactualizar = $r['codigoactualizar'];
}

if (isset($r['statusactualizar'])) {
	$statusactualizar = $r['statusactualizar'];
}

if (isset($r['codigoinforme'])) {
	$codigoinforme = $r['codigoinforme'];
}

if (isset($r['mes'])) {
	$mes = $r['mes'];
}

if (isset($r['ano'])) {
	$ano = $r['ano'];
}

if (isset($r['link'])) {
	$link = $r['link'];
}

global $wpdb;

$table = $wpdb->prefix . 'arij_usuarios';

$tinformes = $wpdb->prefix . 'arij_informes';


if ($codigoactualizar != null && $statusactualizar != null) {

	$wpdb->update($table, array( 
		'estado' => $statusactualizar
		), 
	array( 'id' => $codigoactualizar ), 
	array( 
		'%s',	// value1
		'%d'	// value2
		), 
	array( '%d' ) 
	);

	echo "El estado del usuario $codigoactualizar fue actualizado correctamente";
} else {
	echo "Ingresa por favor los datos correctamente";
}

if ($codigoinforme != null && $mes != null && $ano != null && $link != null) {

	$wpdb->insert($tinformes, array(
		'usuario' => $codigoinforme,
		'informe' => $link,
		'mes' => $mes,
		'ano' => $ano,
		));
}

?>