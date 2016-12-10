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

$TAMANO_PAGINA = 3;


if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 0;
}

if ($pagina != 0) {
    $numax = (($pagina -1) * 3);
}

$usuarios = "SELECT * FROM $table_name ORDER BY id DESC LIMIT 3 OFFSET $numax";
$user = $wpdb->get_results($usuarios);
$allrows = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
$total_paginas = ceil($allrows / $TAMANO_PAGINA);
