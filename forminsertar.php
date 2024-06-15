<?php
include("Web.php");
$p = new Web();

$p->cabeza("insertar Nuevo");
$p->h1("Insertar Persona");

$p->iform("guardarnuevo.php");
echo "CI:"; $p->input('text', "ci"); $p->salto();
echo "NOMBRE:"; $p->input('text', "nombre"); $p->salto();
echo "PATERNO:"; $p->input('text', "paterno"); $p->salto();
echo "MATERNO:"; $p->input('text', "materno"); $p->salto();
$p->salto();
$p->submit("Guardar");
$p->fform();

$p->salto();
$p->enlace("mostrar.php", "Volver");
$p->salto();

$p->pie();
