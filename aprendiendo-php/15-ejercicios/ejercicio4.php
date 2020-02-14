<?php
/*
 * Script en php que tenga 4 variables, una de tipo array, otra de tipo string, otra int y otra booleana y que
 * imprima un mensaje segun el tipo de sea.
 */

    $cosas = array();
    $texto = "texto";
    $numero = 7;
    $siOno = true;

    var_dump($cosas);
    var_dump($texto);
    var_dump($numero);
    var_dump($siOno);

    if (is_array($cosas)){
        echo "<h1>La variable cosas es un array</h1>";
    }

    if (is_string($texto)){
        echo "<h1>$texto</h1>";
    }

    if (is_integer($numero)){
        echo "<h1>$numero</h1>";
    }

    if (is_bool($siOno)){
        echo "<h1>$siOno</h1>";
    }
?>