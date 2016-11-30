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
$sql = array("CREATE TABLE $table_name (
    id int(11) NOT NULL AUTO_INCREMENT,
    nombre varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    cedula bigint(11) DEFAULT NULL,
    email varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    contrasena varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    nacimiento varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    estado int(11) DEFAULT NULL,
    edad int(11) DEFAULT NULL,
    celular bigint(20) DEFAULT NULL,
    telefono bigint(20) DEFAULT NULL,
    referido int(11) DEFAULT NULL,
    ciudad int(11) DEFAULT NULL,
    riesgo int(11) DEFAULT NULL,
    afiliacion int(11) DEFAULT NULL,
    eps int(11) DEFAULT NULL,
    caja int(11) DEFAULT NULL,
    beneficiario int(11) DEFAULT NULL,
    pension int(11) DEFAULT NULL,
    enfermedad varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
)", "CREATE TABLE $triesgos (
    id int(11) NOT NULL AUTO_INCREMENT,
    nivel int(11) DEFAULT NULL,
    riesgo varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
);" , "CREATE TABLE $tciudades (
    id int(11) NOT NULL AUTO_INCREMENT,
    codigo int(11) DEFAULT NULL,
    ciudad varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    departamento int(11) DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
);" , "CREATE TABLE $tdepartamentos (
    id int(11) NOT NULL AUTO_INCREMENT,
    departamento varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
);", "CREATE TABLE $tafiliaciones (
    id int(11) NOT NULL AUTO_INCREMENT,
    plan varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    afiliacion varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    precio bigint(20) DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
);", "CREATE TABLE $teps (
    id int(11) NOT NULL AUTO_INCREMENT,
    eps varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
);" , "CREATE TABLE $tcajas (
    id int(11) NOT NULL AUTO_INCREMENT,
    caja varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    ciudad int(11) DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
);" , "CREATE TABLE $tbeneficiarios (
    id int(11) NOT NULL AUTO_INCREMENT,
    beneficiarios varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
);" , "CREATE TABLE $tpensiones (
    id int(11) NOT NULL AUTO_INCREMENT,
    pension varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
);" , "CREATE TABLE $testados (
    id int(11) NOT NULL AUTO_INCREMENT,
    estado varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
);" , "CREATE TABLE $tinformes (
    id int(11) NOT NULL AUTO_INCREMENT,
    usuario int(11) DEFAULT NULL,
    informe varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
    updated_at timestamp,
    created_at timestamp,
    UNIQUE KEY id (id)
);");

//upgrade contiene la función dbDelta la cuál revisará si existe la tabla o no
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

//creamos la tabla
foreach ($sql as $s){
    dbDelta($s);
}
