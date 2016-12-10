<?php

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

$TAMANO_PAGINA = 2;

$usuarios = "SELECT * FROM $table_name";
$user = $wpdb->get_results($usuarios);
$allrows = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
$total_paginas = ceil($allrows / $TAMANO_PAGINA);

//Consulta para la paginacion
//-------------------------------------------------//

$paginacion = "SELECT * FROM $table_name ORDER BY id DESC LIMIT 0, $TAMANO_PAGINA";
$page = $wpdb->get_results($paginacion);

if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 0;
}

if ($pagina == 0) {
    $inicio = 0;
    $pagina=1;
}
else {
    $inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
