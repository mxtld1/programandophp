<?php

$numero = "5";
var_dump($numero);
echo "\n";
//Convertiendo en int a un estring
$numero = (int)$numero;
var_dump($numero);
echo "\n";

$dias = 5.89;
var_dump($dias);
echo "\n";

$dias = (int)$dias;
var_dump($dias);
echo "\n";

//Cualquier valor vacion 
$banderita = 1;
var_dump($banderita);
echo "\n";
$banderita = (bool)$banderita;
var_dump($banderita);
echo "\n";
