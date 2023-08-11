<?php
include 'includes/header.php';

//atributos de una clase
class Empleado{
    public $nombre; 
    public $apellidos;
    public  $departamento;

}

$empleado = new Empleado();

$empleado->apellidos="Toledo";
$empleado->nombre="Max";
$empleado->departamento=45;

echo "<pre>";
var_dump($empleado);
echo "</pre>";
