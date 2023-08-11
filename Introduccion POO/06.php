<?php
include 'includes/header.php';

//Contructor Property Poromotion
class Empleado{
    
    public function __construct(
    
        public $nombre,
        public $apellidos,
        public  $departamento,
        Public $email,
        public $codigo //La coma puede o no ir
        )
    {}
}

$empleado = new Empleado('Max','Toledo',26.2,'contacto@labasedelcodigo.com',"089");
$empleado2 = new Empleado('Ida','Vuelta','TI','ida@labasedelcodigo.com',047);

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";
