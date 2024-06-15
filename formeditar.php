<?php
include("conexion.php");
include("Web.php");

$bd = new BaseDatos();
$web = new Web();

$id = $_GET['id'];

$datos = $bd->consulta("SELECT * FROM personas WHERE id='$id'");

foreach ($datos as $d) {
    $ci = $d['ci'];
    $nombre = $d['nombre'];
    $paterno = $d['paterno'];
    $materno = $d['materno'];
}

$web->cabeza("Base de Datos");
$web->h1("Editar Persona");
$web->iform("editar.php");
$web->oculto("id", $id);
echo "CI:";$web->texto("ci", "Ci", $ci);$web->salto();
echo "NOMBRE:";$web->texto("nombre", "Nombre", $nombre);
$web->salto();
echo "PATERNO:";$web->texto("paterno", "Paterno", $paterno);
$web->salto();
echo "MATERNO:";$web->texto("materno", "Materno", $materno);
$web->salto();
$web->salto();
$web->submit("Editar");
$web->fform();
$web->enlace("mostrar.php", "Regresar");
$web->pie();
$bd->cerrar();
