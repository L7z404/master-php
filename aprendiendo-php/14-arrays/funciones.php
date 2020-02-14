<?php

$singers = ['eminem','50 cent','oliver','bear'];
$numeros = [1,2,3,4,5];


//ordenar
asort($numeros);
var_dump($numeros);

//añadir elementos array
$singers[] = "natos";
array_push($singers, "Juicy");

//Eliminar elementros array
array_pop($singers);
unset($singers[2]);

//aleatorio
$indice = array_rand($singers);
echo $singers[$indice];


//Dar la vuelta, flip
var_dump(array_reverse($numeros));


//Buscar dentro de un array.
$resultado = array_search('eminem', $singers);
var_dump($resultado);

//Contar
echo sizeof($singers);
echo '<br/>';
echo count($singers);
?>