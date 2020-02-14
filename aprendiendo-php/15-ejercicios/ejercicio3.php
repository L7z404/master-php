<?php
/*
 * Programa que compruebe si una variable esta vacia y si esta vacia rellenarla con texto en minusculas
 * y mostrarlo en mayusculas y negritas.
 */

    $texto = $_GET['texto'];
    if(empty($texto)){

        $texto = "hola hola esto es un string de texto jajaja";
        $textoMayus = strtoupper($texto);

        echo "<h1>$textoMayus</h1>";
    }else{
        echo "<h1>La variable ya tiene datos</h1>";
    }
?>
