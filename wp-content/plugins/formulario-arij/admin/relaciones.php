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

$usuarios = "SELECT * FROM $table_name";
$user = $wpdb->get_results($usuarios);
