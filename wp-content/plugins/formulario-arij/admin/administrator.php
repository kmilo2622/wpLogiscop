<h1 align="center">John Arij Management System</h1>

<p>
    <?php
    require 'relaciones.php';
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

    <!--Finalizacion de formulario de edicion de usuarios-->
    <br><br>
    <div style="overflow-x:auto;">
        <table id="tabla" class="tablita">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Email</th>
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
                    $afiliaciones = "SELECT * FROM $tafiliaciones WHERE id = $u->riesgo";
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
                        <td><?= $u->email ?></td>
                        <td><?= $u->cedula ?></td>
                        <td><?= $u->nacimiento ?></td>
                        <td><?php foreach ($estado as $e){ echo $e->estado; } ?></td>
                        <td><?= $u->edad ?></td>
                        <td><?= $u->celular ?></td>
                        <td><?= $u->telefono ?></td>
                        <td><?= $u->referido ?></td>
                        <td><?php foreach ($city as $c){ echo $c->ciudad; } ?></td>
                        <td><?php foreach ($risk as $r){ echo "Nivel " . $r->nivel; } ?></td>
                        <td><?php foreach ($afiliation as $af){ echo $af->afiliacion; } ?></td>
                        <td><?php foreach ($eps as $ep){ echo $ep->eps; } ?></td>
                        <td><?php foreach ($caja as $ep){ echo $ep->caja; } ?></td>
                        <td><?php foreach ($benefactor as $be){ echo $be->beneficiarios; } ?></td>
                        <td><?php foreach ($pension as $pe){ echo $pe->pension; } ?></td>
                        <td><?= $u->enfermedad ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    if ($user == null) { ?>
        <form action="<?php echo get_home_url(). "/administrador/insertar/" ?>">
            <p>Esta acción solo ejecútala una sola vez en tu vida</p>
            <button type="submit" name="insertar datos">Insertar Datos</button>
        </form>
        <?php
    }
    if ($total_paginas >= 0){
        for ($i=1; $i<=$total_paginas; $i++){
            if ($pagina == $i) {
                echo '<button type="button" class="btn btn-primary disabled">'.$pagina.'</button> ';
                //echo $pagina . " ";
            }
            else {
                echo '<a href="index.php?pagina= '. $i . '" class="btn btn-primary" role="button">'.$i. '</a> ';
                //echo "<a href='index.php?pagina=" . $i . "'>" . $i . "</a> ";
            }
        }
    }
    ?>

    <p>
        <form method="POST" action="<?php echo get_home_url(). "/administrador/cambios/" ?>">
            <!--Formulario de edicion de usuarios John Arij-->
            <br>
            <p>
                A continuación puedes cambiar el estado de cualquier usuario
            </p>
            <br>
            <p>
                <b>Código del usuario</b><br>
                <input type="number" name="codigoactualizar" id="codigo"><br>
                <b>Estado</b><br>
                <input type="number" name="statusactualizar" id="status"><br>
                <p> 1 = Activo, 2 = Inactivo, 3 = Pendiente, 4 = Que es referido</p>
            </p>
            <br>

            <button type="submit">Enviar</button>

        </form>

        <hr>

        <form method="POST" action="<?php echo get_home_url(). "/administrador/cambios/" ?>">
            <p>
                A continuacion podra subir los documentos y recibos de pago de los usuarios. Por favor, ingrese a continuacion el link en google drive, dropbox o cualquier servidor externo.
            </p>
            <br>
            <p>
                <b>Código del usuario</b><br>
                <input type="number" name="codigoinforme" id="codigo"><br>
                <b>Link</b><br>
                <input type="text" name="link">
                <select name="mes">
                    <option value="Enero">Enero</option>
                    <option value="Febrero">Febrero</option>
                    <option value="Marzo">Marzo</option>
                    <option value="Abril">Abril</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Junio">Junio</option>
                    <option value="Julio">Julio</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Septiembre">Septiembre</option>
                    <option value="Octubre">Octubre</option>
                    <option value="Noviembre">Noviembre</option>
                    <option value="Diciembre">Dociembre</option>
                </select>
                <select name="ano">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                </select>
            </p>
            <button type="submit">Enviar</button>
        </form>
    </p>

    <?php
    //Ahora actualizemos los registros que estamos gestionando... no hay problema verdad?
    function actualizar(){
        echo $_REQUEST['ano'];
        echo $_REQUEST['ano'];
    }
    ?>
</p>
