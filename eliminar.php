<?php
include("conexion.php");
include("Web.php");

$bd = new BaseDatos();
$w = new Web();

$id = $_GET['id'];

$bd->consulta("DELETE FROM personas WHERE id='$id'");

echo "Persona eliminada Exitosamente";
$w->salto();

$w->enlace("mostrar.php", "Volver");
