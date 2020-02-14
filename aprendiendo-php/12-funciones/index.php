<?php

/* 
 * Funciones:

//Ejemplo

function muestraNombres(){
    echo "Leonel Castillo </br>";
    echo "Magnolia Castillo </br>";
    echo "Miguel Castillo </br>";
    echo "Jose Castillo </br>";
    echo "Elizabeth Castillo </br>";
    echo "<hr/>";
}

//invocar funcion
muestraNombres();
muestraNombres();
muestraNombres();

//Ejemplo 2
function tabla($numero){
    //var_dump($numero);
    echo "<h3> Tabla de multiplicar del numero: $numero </h3>";
    for($i=1;$i<=10;$i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
    }
}

if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
    tabla(2);
    tabla(20);
} else {
    echo "<h2>No hay numero para mutipicar</h2>";
}

for($i=1;$i<=10;$i++){
    tabla($i);
}
*/

//Ejemplo 3
/*
function calculadora($numero1,$numero2,$negrita=false){
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multi = $numero1*$numero2;
    $divi = $numero1/$numero2;
    $cadena_texto = "";
    
    
    if ($negrita) {
        $cadena_texto .="<h1>";
    }
    $cadena_texto .= "Suma: $suma <br/>";
    $cadena_texto .= "Resta: $resta <br/>";
    $cadena_texto .= "Multiplicación: $multi <br/>";
    $cadena_texto .= "División: $divi <br/>";
    
    if ($negrita) {
        echo "</h1>";
    }
    $cadena_texto .= "<hr/>";
    
    return $cadena_texto;
}
//calculadora(10, 30);
echo calculadora(10, 30,true);

*/

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}
function getApellidos($apellidos){
    $texto = "El nombre es: $apellidos";
    return $texto;
}


//Ejemplo 4
function devuelveElNombre($nombre,$apellidos){
    $texto = getNombre($nombre)
        . "<br/>".
        getApellidos($apellidos);
    return $texto;
}
echo devuelveElNombre("Leo", "Castillo");



?>