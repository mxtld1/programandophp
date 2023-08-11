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
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->departamento=$departamento;
        $this->email=$email;
        $this->codigo=$codigo;

    }
}

$empleado = new Empleado('Max','Toledo','TI','contacto@labasedelcodigo.com','003');

echo "<pre>";
var_dump($empleado);
echo "</pre>";

