<?php
include 'includes/header.php';

/**
 * Getter y Setters 
*/
class Empleado{
    protected $nombre; 
    protected $apellidos;
    protected  $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre,$apellidos,$departamento,$email,$codigo)
    {
        
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->departamento=$departamento;
        $this->email=$email;
        $this->codigo=$codigo;
    }
    /*
    Get- Para obtener un valor
    Set- Para modificar un  valor
    */

    public function nombreEmpleado()
    {
        echo $this->nombre." ".$this->apellidos;
    }

    public function departamentoEmpleado()
    {
        return $this->departamento;

    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nuevoNombre)
    {
        $this->nombre=$nuevoNombre;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($nuevoEmail){
        return $this->email=$nuevoEmail;

    }

}

$max = new Empleado('Max','Toledo','TI','contacto@labasedelcodigo.com','003');

$max->setNombre("Nuevo Nombre");
echo $max->getNombre();
echo"<br>";
echo $max->getCodigo();

echo"<br>";
echo "Correo anterior: ".$max->getEmail();
echo"<br>";
$max->setEmail("sapo@gmail.com");
echo "Correo Actual: ".$max->getEmail();

