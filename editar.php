<?php
include("conexion.php");
include("Web.php");

$bd = new BaseDatos();
$w = new Web();

$id = $_POST['id'];
$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];

$bd->consulta("UPDATE personas SET ci='$ci', nombre='$nombre', paterno='$paterno',materno='$materno' WHERE id='$id'");

echo "Persona actualizada Exitosamente";
$w->salto();

$w->enlace("mostrar.php", "Volver");
