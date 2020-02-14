<?php

/* 
 * Recoger 2 numeros de la url y Suma, resta, division, multiplicacion.
 */

//var_dump($_GET);
if(isset($_GET['numero']) && isset($_GET['numero2'])) {
    $numero = $_GET['numero'];
    $numero2 = $_GET['numero2'];
    
    echo '<h1 style="color:blue">Calculadora<h1>';
    echo 'Suma: '.($numero+$numero2).'<br/>';
    echo 'Resta: '.($numero-$numero2).'<br/>';
    echo 'Mutiplicación: '.($numero*$numero2).'<br/>';
    echo 'División: '.($numero/$numero2);
} else{
    echo '<h2 style="color:red">ERROR. Introduce correctamente los valores por la URL (/?numero=x&numero2=x)<h2>';
}
    
    






?>