<h1 align="center">John Arij Management System</h1>

<p>
    <?php
    global $wpdb;

    $table = $wpdb->prefix . 'arij_usuarios';

    $consulta = "SELECT * FROM $table";
    $resultado = $wpdb->get_results($consulta);

    ?>
    <style>
    #tabla {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}
    </style>
    <div style="overflow-x:auto;">
        <table id="tabla" class="tablita">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Estado</th>
                    <th>Edad</th>
                    <th>Celular</th>
                    <th>Telefono</th>
                    <th>Referido</th>
                    <th>Ciudad</th>
                    <th>Riesgo</th>
                    <th>Afiliacion</th>
                    <th>Eps</th>
                    <th>Beneficiario</th>
                    <th>Pension</th>
                    <th>Enfermedad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado as $r) {
                    //print_r($r); ?>
                    <tr>
                        <td><?= $r->id ?></td>
                        <td><?= $r->nombre ?></td>
                        <td><?= $r->cedula ?></td>
                        <td><?= $r->nacimiento ?></td>
                        <td><?= $r->estado ?></td>
                        <td><?= $r->edad ?></td>
                        <td><?= $r->celular ?></td>
                        <td><?= $r->telefono ?></td>
                        <td><?= $r->referido ?></td>
                        <td><?= $r->ciudad ?></td>
                        <td><?= $r->riesgo ?></td>
                        <td><?= $r->afiliacion ?></td>
                        <td><?= $r->eps ?></td>
                        <td><?= $r->beneficiario ?></td>
                        <td><?= $r->pension ?></td>
                        <td><?= $r->enfermedad ?></td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </p>
