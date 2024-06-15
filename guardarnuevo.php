<?php
include("conexion.php");
include("Web.php");

$bd = new BaseDatos();
$w = new Web();

$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];

$bd->consulta("INSERT INTO personas(ci,paterno,materno,nombre) VALUES ('$ci','$paterno','$materno','$nombre')");

echo "Persona guardada Exitosamente";
$w->salto();
$w->enlace("mostrar.php", "Volver");

$bd->cerrar();
