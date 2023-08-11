<?php
include 'includes/header.php';

/**
 * Modificadores de acceso
 * Public-> Acceso en cualquier lugar(Clase u Objeto)
 * Protected -> Acceso unicament en la clase
 * Private
*/
class Empleado{
    protected $nombre; 
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

    public function nombreEmpleado()
    {
        echo $this->nombre." ".$this->apellidos;
    }

    public function departamentoEmpleado()
    {
        return $this->departamento;

    }
    public function obtenerNombre(){
        return $this->nombre;
    }

    public function cambiarNombre($nuevoNombre)
    {
        $this->nombre=$nuevoNombre;
    }

}

$max = new Empleado('Max','Toledo','TI','contacto@labasedelcodigo.com','003');

//echo $max->nombre;// No se puede pero con una función si 
echo "<pre>";
echo $max->obtenerNombre();
echo "</pre>";
echo "<br>";
//Tratando de modificar 
//$juna->nombre="Nuevo nombre";
$max->cambiarNombre("Nuevo Nombre");

echo "<pre>";
var_dump($max);
echo "</pre>";

$depto1 = $max->departamentoEmpleado();
echo $depto1;
echo "</pre>";
