<?php

//operadores aritmeticos
$numero1 = 73;
$numero2 = 35;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicación: '.($numero1*$numero2).'<br/>';
echo 'División: '.($numero1/$numero2).'<br/>';
echo 'Resto: '.($numero1%$numero2).'<br/>';

//operadores incremento y decremento
$year = 2020;

//Decremento
$year--; 
--$year; //Pre decremento

//Incremento
$year++; 
++$year; //Pre incremento

echo '<h1>'.$year.'<h1>';


//operadores de asignación
$edad = 55;

echo $edad.'<br/>';

echo ($edad+=5).'<br/>';
echo ($edad-=5).'<br/>';
echo ($edad*=5).'<br/>';
echo ($edad/=5).'<br/>';

?>