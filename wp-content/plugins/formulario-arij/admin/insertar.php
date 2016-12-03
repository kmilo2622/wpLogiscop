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

//Insertamos un usuario de manera predeterminada con el fin de tener un mejor control de los mismos

$wpdb->insert($table_name, array(
    'nombre' => 'John Arij',
    'cedula' => 1023026521,
    'email' => 'juanca-arroyave@hotmail.com',
    'contrasena' => 'mama45',
    'nacimiento' => '1998-03-26',
    'edad' => 18,
    'estado' => 2,
    'celular' => 3216226647,
    'telefono' => null,
    'referido' => null,
    'ciudad' => 5001,
    'riesgo' => 1,
    'afiliacion' => 2,
    'eps' => 3,
    'caja' => 1,
    'beneficiario' => 2,
    'pension' => 1,
    'enfermedad' => 'Ninguna',
));

//Insertamos las ciudades que necesitamos a través de un arreglo

$ciudades = array('BOGOTA' => array(11001 => 1), 'MEDELLIN' => array(5001 => 2), 'CALI' => array(76001 => 3), 'VILLAVICENCIO' => array(50001 => 4), 'ARMENIA' => array(63001 => 5), 'PEREIRA' => array(66001 => 6));

foreach ($ciudades as $key => $value) {
    $ciudad = $key;
    foreach ($value as $item => $k) {
        $codigo = $item;
        $departamento = $k;
    }

    $wpdb->insert($tciudades, array(
        'codigo' => $codigo,
        'ciudad' => $ciudad,
        'departamento' => $departamento
    ));
}

//Ahora insertamos los estados de los inmuebles

$estados = array('ACTIVO', 'INACTIVO', 'PENDIENTE', 'REFERIDO');

foreach ($estados as $e) {
    $wpdb->insert($testados, array(
        'estado' => $e
    ));
}

//Ahora insertamos información en la tabla de riesgos

$riesgostablita = array(
    1 => 'Personal de oficinas , Vendedores, Zapateros, Servicio Doméstico, Administradores, Amas de Casa.',
    2 => 'Billares, Personal de Restaurante, Ferreterías, Confecciones, Labor Agrícola',
    3 => 'Cerrajero, Mecánico, Ebanista, Pintores sin Altura, Electricista',
    4 => 'Conductores, Ayudantes',
    5 => 'Construcción, Químicos, Escoltas, Pintores y personal de Alturas',
);

foreach ($riesgostablita as $value => $risk) {

    $wpdb->insert($triesgos, array(
        'nivel' => $value,
        'riesgo' => $risk,
    ));

}

//Insertamos información en la tabla de eps

$epstablita = array('Cafesalud', 'Coomeva', 'Compensar', 'Cruz Blanca', 'Famisanar', 'Nueva EPS', 'Salud Total', 'Sanitas', 'Sura');

foreach ($epstablita as $e) {

    $wpdb->insert($teps, array(
        'eps' => $e
    ));
}

//Insertamos ahora información en la tabla de afiliaciones

$afiliacionestablita = array(
    'Básico EPS + ARL' => 69900,
    'Complementario EPS + ARL + CAJA' => 89900,
    'Protección EPS + ARL + PENSIÓN' => 186900,
    'Integral EPS + ARL + PENSIÓN + CAJA' => 199900
);

foreach ($afiliacionestablita as $a => $precio) {

    $wpdb->insert($tafiliaciones, array(
        'afiliacion' => $a,
        'precio' => $precio,
    ));

}

//Información de la tabla de caja de compensación

$cajatabliita = array(
    'Escogí un Plan sin caja de compensación' => 11001,
    'Colsubsidio' => 11001,
    'Compensar' => 11001,
    'Comfama' => 5001,
    'Comfrem' => 50001,
    'Comfenalco' => 63001,
    'Comfenalco' => 76001,
    'Comfamiliar' => 66001
);

foreach ($cajatabliita as $c => $ciudad) {
    $wpdb->insert($tcajas, array(
        'caja' => $c,
        'ciudad' => $ciudad
    ));
}

//Insertamos información en la tabla de beneficiarios

$beneficiariotablita = array('No tengo Beneficiarios', 'Si tengo, mi(s) hijos(as)', 'Si, mi conyuge', 'Si, mis padres dependen economicamente de mi');

foreach ($beneficiariotablita as $b) {
    $wpdb->insert($tbeneficiarios, array(
        'beneficiarios' => $b
    ));
}

//Insertamos información en la tabla de pensiones y terminamos definitamente

$pensiontablita = array('No requiero cotizar', 'Protección', 'Porvenir', 'Colpensiones', 'Colfondos', 'OldMutual');

foreach ($pensiontablita as $p) {
    $wpdb->insert($tpensiones, array(
        'pension' => $p
    ));
}

echo "Datos generales insertados correctamente";
