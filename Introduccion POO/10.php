<?php
include 'includes/header.php';
class Persona{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono )
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->email=$email;
        $this->telefono=$telefono;
    }

    public function mostrarInformacion(){
        echo "Nombre: ".$this->nombre." ". $this->apellido." Email: ".$this->email; 
    }
    public function getTelefono(){
        return $this->telefono;
    }

}

//Herencia
Class Empleado extends Persona{
    
    protected $codigo;
    protected $departamento;

    //constructor
    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre,$apellido,$email,$telefono);
        $this->codigo=$codigo;
        $this->departamento=$departamento;
    }
}

Class Proveedor extends Persona{
    
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre,$apellido,$email,$telefono);
        $this->empresa=$empresa;
    }
    public function mostrarInformacion(){
        echo "Nombre: ".$this->nombre." ". $this->apellido." Email: ".$this->email."de la empresa ".$this->empresa; 
    }
    
    
}
$empleado = new Empleado("Max","Toledo","empleado@labasedelcodigo.com","+52 5512345678","04","CODIGO");
$proveedor = new Proveedor("Pedro","Vargas","proveedor@labasedelcodigo.com","+52 5512345678","La Base Del Codigo");

echo"<pre>";
var_dump($empleado);
echo"</pre>";
echo"<hr>";
echo"<pre>";
var_dump($proveedor);
echo"</pre>";

echo"<hr>";
$empleado->mostrarInformacion();
echo"<hr>";
echo"<hr>";
$proveedor->mostrarInformacion();
echo"<hr>";
echo $empleado->getTelefono();