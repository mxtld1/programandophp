<?php
include 'includes/header.php';

class Empleado{
    public $nombre; 
    public $apellidos;
    public  $departamento;
    Public $email;
    public $codigo;

    public function __construct($nombre,$apellidos,$departamento,$email,$codigo)
    {
        $this->nombreEmpleado();
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->departamento=$departamento;
        $this->email=$email;
        $this->codigo=$codigo;

    }
    

    public function nombreEmpleado()
    {
        echo $this->nombre." ".$this->apellidos;
    }
    public function departamentoEmpleado()
    {
        return $this->departamento;

    }
}

$empleado = new Empleado('Max','Toledo','TI','contacto@labasedelcodigo.com','003');

$empleado2 = new Empleado('Max','Toledo','TI','contacto@labasedelcodigo.com','003');


echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

$empleado->nombreEmpleado();
echo "<pre>";
$depto1 = $empleado2->departamentoEmpleado();
echo $depto1;
echo "</pre>";
