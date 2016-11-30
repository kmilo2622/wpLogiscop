<?php
//obtenemos el objeto $wpdb
global $wpdb;

//el nombre de la tabla, utilizamos el prefijo de wordpress
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

//sql con el statement de la tabla
$sql = "DROP table IF EXISTS $table_name, $tciudades, $tdepartamentos, $triesgos, $tafiliaciones, $teps, $tcajas, $tbeneficiarios, $tpensiones, $testados, $tinformes";

$wpdb->query($sql);
