<h1 align="center">John Arij Management System</h1>

<p>
    <?php
    global $wpdb;

    $table = $wpdb->prefix . 'arij_usuarios';

    $consulta = "SELECT * FROM $table";
    $resultado = $wpdb->get_results($consulta);

    foreach ($resultado as $r) {
        print_r($r);
        echo "<br />" . $r->nombre;
    }
    ?>
</p>
