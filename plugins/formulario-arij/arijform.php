<?php
/*
Plugin Name: arijform
Plugin URI: https://www.johnarij.ml
Description: Plugin de Wordpress para gestionar usuarios en un modelo completamente comercial; cuenta con formulario de login, de registro y ademas una interfaz de perfil.
Version: 1.0
Author: John Arij
Author URI: http://www.johnarij.ml
*/

require 'admin/admin.php';

register_activation_hook( __FILE__, 'udp_create_tables' );

/*
* @description Función que crea las tablas en la activación del plugin
*/
function udp_create_tables() {
    require 'tables/tables.php';
}

/*
* @description Hook que se ejecuta una sóla vez ideal para este caso
*/
add_action( 'register_form', 'udp_get_search' );

function udp_get_search() {

    add_options_page('ArijUsers', 'ArijUsers', 'administrator',
    'arijform', 'arij_users_admin_page');

    if(isset($_GET["s"]) && !empty($_GET["s"])) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'arij_users';

        $wpdb->insert(
        $table_name,
        array(
            'search' =>  esc_attr( $_GET["s"] )
            )
        );
    }
}

function registerForm(){
    include 'views/register.php';
}

function startSession(){
    include 'views/startsession.php';
}

function perfil(){
    include 'views/profile.php';
}

function registration() {
    return "funciona";
}

add_shortcode('test', 'registerForm');
add_shortcode('start', 'startSession');
add_shortcode('perfil', 'perfil');

/*
* @description Hook que se ejecuta al desactivar el plugin
*/
register_deactivation_hook(__FILE__, 'udp_remove_tables' );

/*
* @description Función que se ejecuta al desactivar el plugin
*/
function udp_remove_tables() {
    require 'tables/drop-tables.php';
}
