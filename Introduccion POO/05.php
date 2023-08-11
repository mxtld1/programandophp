<?php

include 'includes/header.php';

class Empleado{
    public $nombre; 
    public $apellidos;
    public  $departamento;
    Public $email;
    public $codigo;

    public function __construct($nombre,string  $apellidos,string $departamento,string $email, int $codigo)
    {
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->departamento=$departamento;
        $this->email=$email;
        $this->codigo=$codigo;

    }
}

$empleado = new Empleado('Max','Toledo',26.2,'contacto@labasedelcodigo.com',"089");
$empleado2 = new Empleado('Ida','Vuelta','TI','ida@labasedelcodigo.com',047);

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";
