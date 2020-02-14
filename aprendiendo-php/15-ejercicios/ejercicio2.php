<?php
/*
 * Programa que añada valores a un array mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla
 */
    echo "<h1>Ejercicio2 Arrays PHP</h1>";
    $cosas=array();

    for ($i=0;$i<120;$i++){
        array_push($cosas, "elemento-".$i);
    }

    /* Ver todos los elementos del array
     * var_dump($cosas);
     */

    //ver elemento indivivual
    echo "<h3>Array Cosas:</h3>";
    echo $cosas[45];
?>
