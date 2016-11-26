<h1>Hola <?php echo $_REQUEST['email'] ?></h1>

<?php global $wpdb;

$email = $_REQUEST['email'];

echo $wpdb->query('SELECT * FROM ayharij_users');

?>
