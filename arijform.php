<?php  
/*
  Plugin Name: arijform
  Plugin URI: https://www.johnarij.ml
  Description: Plugin de Wordpress para gestionar usuarios en un modelo completamente comercial; cuenta con formulario de login, de registro y ademas una interfaz de perfil. 
  Version: 1.0
  Author: John Arij
  Author URI: http://www.johnarij.ml
 */

  register_activation_hook( __FILE__, 'udp_create_tables' );
  
/*
* @description Función que crea las tablas en la activación del plugin
*/
function udp_create_tables()
{
//obtenemos el objeto $wpdb
	global $wpdb;
	
    //el nombre de la tabla, utilizamos el prefijo de wordpress
	$table_name = $wpdb->prefix . 'udp_statistics_searchs';
	
    //sql con el statement de la tabla
	$sql = "CREATE TABLE $table_name (
	id int(11) NOT NULL AUTO_INCREMENT,
	search varchar(255) DEFAULT NULL,
	UNIQUE KEY id (id)
	);";
	
//upgrade contiene la función dbDelta la cuál revisará si existe la tabla o no
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	
    //creamos la tabla
	dbDelta($sql);
}

/*
* @description Hook que se ejecuta una sóla vez ideal para este caso
*/
add_action( 'wp_footer', 'udp_get_search' );

function udp_get_search()
{
	if(isset($_GET["s"]) && !empty($_GET["s"]))
	{
		global $wpdb;
		$table_name = $wpdb->prefix . 'udp_statistics_searchs';
		
		$wpdb->insert(
			$table_name,
			array(
				'search' =>  esc_attr( $_GET["s"] )
				)
			);
	}
}

/*
* @description Hook que se ejecuta al desactivar el plugin
*/
register_deactivation_hook(__FILE__, 'udp_remove_tables' );

/*
* @description Función que se ejecuta al desactivar el plugin
*/
function udp_remove_tables()
{
//obtenemos el objeto $wpdb
	global $wpdb;
	
    //el nombre de la tabla, utilizamos el prefijo de wordpress
	$table_name = $wpdb->prefix . 'udp_statistics_searchs';
	
    //sql con el statement de la tabla
	$sql = "DROP table IF EXISTS $table_name";
	
	$wpdb->query($sql);
}

  /*class JohnArijRegister{

  	function __construct() {
  		add_action('activate_arijform/arijform.php','createTables');
  		add_action('deactivate_arijform/arijform.php', 'removeTables');
  	}

  	function createTables() {

  		global $wpdb;

  		$table_name = $wpdb->prefix . 'ayh_arij_users';
  		$sql = "CREATE TABLE $table_name (



  		id int(11) NOT NULL AUTO_INCREMENT,
  		nombre varchar(255) DEFAULT NULL,
  		cedula BIGINT(20) DEFAULT NULL, 
  		email VARCHAR(255) DEFAULT NULL,
  		contraseña VARCHAR(255) DEFAULT NULL,
  		nacimiento VARCHAR(255) DEFAULT NULL,
  		id_estado INT(11), NOT NULL,
  		edad INT(11) DEFAULT NULL,
  		celular BIGINT(20) DEFAULT NULL,
  		telefono BIGINT(20) DEFAULT NULL,

  		refererido INT(11) DEFAULT NULL,
  		id_ciudad INT(11) DEFAULT NULL,
  		id_riesgo INT(11) DEFAULT NULL,
  		id_afiliacion INT(11) DEFAULT NULL,
  		id_eps INT(11) DEFAULT NULL,
  		id_caja INT(11) DEFAULT NULL,
  		id_beneficiario INT(11) DEFAULT NULL,
  		id_pension INT(11) DEFAULT NULL,
  		id_enfermedad INT(11) DEFAULT NULL,

  		created_at TIMESTAMP,
  		updated_at TIMESTAMP,


  		PRIMARY KEY id (id)
  		) ENGINE = MYISAM;";

  		$wpdb->query($sql);
  	}

  	function removeTables() {

  		global $wpdb;

  		$table_name = $wpdb->prefix . 'arij_users';

  		$sql = "DROP table IF EXISTS $table_name";

  		$wpdb->query($sql);
  	}

  }

  new JohnArijRegister;*/