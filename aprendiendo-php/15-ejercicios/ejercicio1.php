<?php

/* 
 * Ejercicio 1. Hacer un programa en php que tenga un array con 8 numeros
 * enteros y que haga lo siguente:
 * -recorerlo y mostrarlo
 * -ordenarlo y mostrarlo
 * -mostrar su longitud
 * -buscar algun elemento
 */

//Function
echo "<h1>Leonel Castillo, Ejercicio 1: Arrays PHP<h1>";

function mostrarArray($numeros){
    $resultado = "";
    foreach ($numeros as $numero){
        //resultado = $resultado.$numero."<br/>";
        $resultado .= $numero."<br/>";
    }
    return $resultado;
}

$numeros = array(7,3,8,1,2,3,5,4);

echo "<h4>Numeros Desordenados</h4>";
echo mostrarArray($numeros);



echo "<h4>Longitud de array numeritos</h4>";
$cantidadNumeros = count($numeros);
echo $cantidadNumeros."<br/><br/>";

echo "<h4>Numeros Ordenados</h4>";
sort($numeros);
echo mostrarArray($numeros);

echo "<h4>Buscando donde esta el #8 en el array numeritos</h4>";
echo array_search('8', $numeros);



if (isset($_GET['numero'])) {
    $busqueda = $_GET['numero'];
    echo "<h1>Buscar en el array el numero $busqueda</h1>";
    $search = array_search($busqueda, $numeros);
    if (!empty($search)) {
        echo "<h3>El numero buscado existe en el array, en el indice: $search</h3>";
    } else {
        echo "no existe el numero buscado";
    }
}

?>