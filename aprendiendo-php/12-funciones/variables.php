<?php

/* 
 * Variables y eso

$frase = "Esto es una frase";

echo $frase;

function holaFrase(){
    global $frase;
    echo "<h1>$frase<h1>";
    
    $year = 2020;
    echo "<h1>$year<h1>";
    
    return $year;
}

echo holaFrase();
*/

function buenasDias(){
    return "Hola! Buenos dias :)";
}

function buenasTardes(){
    return "Hey!! Que tal ha ido la comida??";
}

function buenasNoches(){
    return "¿Te vas a dormir ya? Buenas noches!!";
}

$horario = "buenasNoches"; //$horario = $_GET['horario'];
echo $horario();

/*
Asignar una funcion a una variable

$buenDiaOAlgoAsiTest = "buenosDias";
echo $buenDiaOAlgoAsiTest();
 
o
 
usando concatenación con la variable horario para acceder a funciones con
 * nombres algo similares....

$miFuncion = "buenas".$horario;
echo $miFuncion();
  
*/

?>