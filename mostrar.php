<?php
include("web.php");
include("conexion.php");

$web = new Web();
$bd = new BaseDatos();

$web->cabeza("Base de Datos");
$web->h1("Mostrando Personas");

$datos = $bd->consulta("SELECT * FROM personas;");
foreach ($datos as $d) {
    echo $d['nombre'] . " " . $d['paterno'] . " " . $d['materno'] . " -> CI:" . $d['ci'] ."  ";
    $web->enlace("formeditar.php?id=" . $d['id'],"Editar");
    $web->enlace("eliminar.php?id=" . $d['id'], "Eliminar");
    $web->salto();
}

$web->salto();
$web->enlace("forminsertar.php", "Insertar Persona");

$bd->cerrar();
