<?php
include 'includes/header.php';

/**
 * Metodos Estáticos
*/
class Empleado{
    protected static $nombre; 
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
    public static function obtenerEmpleado(){
        $cadena ="Desde el metodo estático";
        echo "<h2>$cadena</h2>";
    }
}
$max = new Empleado('Max','Toledo','TI','contacto@labasedelcodigo.com','003');

Empleado::obtenerEmpleado();

echo "<pre>";
var_dump($max);
echo "</pre>";