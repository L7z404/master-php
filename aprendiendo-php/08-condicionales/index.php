<?php
//Condicionales

/* == igual
 === identico
 != diferente
 <> diferente
 !== No identico
 < menor que 
 > mayor que
 <= menor que o igual
 >= mayor que o igual
*/

$color = "azul";

if($color == "azul"){
    echo "EL COLOR ES AZUL";
} else {
    echo "EL COLOR NO ES AZUL";
}


//--------------------------------------//
echo "<br/>";
$year = 2020;
if ($year <= 2020) {
    echo "Año anterior a 2020";
} else {
    echo "Año posterior a 2020";
}


//--------------------------------------//
$nombre = "Leonel Castillo";
$cuidad = "Chiquilistlan";
$continente = "America";
$edad = 78;
$mayor_edad = 18;

if ($edad >= $mayor_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";
    
    if ($continente == "America") {
        echo "<h4>Y es de $cuidad</h4>";
    } else {
        echo "<h4>No es de $cuidad</h4>";
    }
    
} else {
    echo "<h1>$nombre no es mayor de edad</h1>";
}

//--------------------------------------//
echo "<hr/>";
$dia = 9;

if ($dia == 1) {
    echo "LUNES";
}elseif ($dia == 2) {
    echo "MARTES";
}elseif ($dia == 3) {
    echo "MIERCOLES";
}elseif ($dia == 4) {
    echo "JUEVES";
}elseif ($dia == 5) {
    echo "VIERNES";
} else {
    echo "FIN DE SEMANA!";
}
echo "<hr/>";
//--------------------------------------//
$dia = 2;
switch ($dia){
    case 1: echo "LUNES";
        break;
    case 2: echo "MARTES";
        break;
    case 3: echo "MIERCOLES";
        break;
    case 4: echo "JUEVES";
        break;
    case 5: echo "VIERNES";
        break;
    default:
        echo "ES FIN DE SEMANA!";
}

//--------------------------------------//
echo "<hr/>";

$edad0 = 18;
$edad1 = 29;
$edad_oficial = 20;

if ($edad_oficial >= $edad0 && $edad_oficial<=$edad1) {
    echo "ESTA EN EDAD DE TRABAJAR";
}else{
    echo "NO PUEDE TRABAJAR";
}

//--------------------------------------//
echo "<hr/>";
$pais = "Portugal";
if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este pais se habla spanish";
} else {
    echo "We no speako spanisho";
}


//--------------------------------------//
echo "<hr/>";
goto aqui;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

aqui:
echo '<h1>Me he saltado 4 echos<h1>';

echo '<h1>Magnolia es una garra<h1>';
?>