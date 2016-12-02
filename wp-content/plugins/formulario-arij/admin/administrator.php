<h1 align="center">John Arij Management System</h1>

<p>
    <?php

    include 'relaciones.php';

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
                    <th>Caja de Compensación</th>
                    <th>Beneficiario</th>
                    <th>Pension</th>
                    <th>Enfermedad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $u) {

                    $riesgos = "SELECT * FROM $triesgos WHERE id = $u->riesgo";
                    $risk = $wpdb->get_results($riesgos);

                    $ciudades = "SELECT * FROM $tciudades WHERE codigo = $u->ciudad";
                    $city = $wpdb->get_results($ciudades);

                    $afiliaciones = "SELECT * FROM $triesgos WHERE id = $u->riesgo";
                    $afiliation = $wpdb->get_results($afiliaciones);

                    $epSalud = "SELECT * FROM $teps WHERE id = $u->eps";
                    $eps = $wpdb->get_results($epSalud);

                    $cajaCompensacion = "SELECT * FROM $tcajas WHERE id = $u->caja";
                    $caja = $wpdb->get_results($cajaCompensacion);

                    $beneficiarios = "SELECT * FROM $tbeneficiarios WHERE id = $u->beneficiario";
                    $benefactor = $wpdb->get_results($beneficiarios);

                    $pensiones = "SELECT * FROM $tpensiones WHERE id = $u->pension";
                    $pension = $wpdb->get_results($pensiones);

                    $estadoUsuario = "SELECT * FROM $testados WHERE id = $u->estado";
                    $estado = $wpdb->get_results($estadoUsuario);

                    $informeUsuario = "SELECT * FROM $tinformes WHERE usuario = $u->id";
                    $informe = $wpdb->get_results($informeUsuario);
                    //print_r($r); ?>
                    <tr>
                        <td><?= $u->id ?></td>
                        <td><?= $u->nombre ?></td>
                        <td><?= $u->cedula ?></td>
                        <td><?= $u->nacimiento ?></td>
                        <td><?php foreach ($estado as $e){ echo $e->estado; } ?></td>
                        <td><?= $u->edad ?></td>
                        <td><?= $u->celular ?></td>
                        <td><?= $u->telefono ?></td>
                        <td><?= $u->referido ?></td>
                        <td><?php foreach ($city as $c){ echo $c->ciudad; } ?></td>
                        <td><?php foreach ($risk as $r){ echo $r->riesgo; } ?></td>
                        <td><?= $u->afiliacion ?></td>
                        <td><?= $u->eps ?></td>
                        <td><?= $u->caja ?></td>
                        <td><?= $u->beneficiario ?></td>
                        <td><?= $u->pension ?></td>
                        <td><?= $u->enfermedad ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <p>
        A continuación puedes cambiar el estado de cualquier usuario
        <br><br>
        <p>
            <b>Código del usuario</b><br>
            <input type="number" name="codigo" id="codigo"><br>
            <b>Estado</b> 1 = Activo, 2 = Inactivo, 3 = Pendiente <br>
            <input type="number" name="status" id="status">
        </p>
    </p>
</p>
