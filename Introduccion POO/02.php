<?php
include 'includes/header.php';

//instanciar una clase
class Empleado{

}
//Forma 1
$empleado = new Empleado();
//Forma 2
$empleado = new Empleado;
$empleado2 = new Empleado;
$empleado3 = new Empleado();
echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

echo "<pre>";
var_dump($empleado3);
echo "</pre>";