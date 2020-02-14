<?php
/*
 * Crear un array con el contenido de la tabla
 * ACCION   AVENTURA    DEPORTES
   GTA      ASSASSINS   FIFA 19
   COD      CRASH       PES 19
   PUBG     Prince of   MOTO GP 19
            persia

 * Cada fichero debe ir en una columna separada(includes)
 */

$tabla = array(
    "ACCION" => array("GTA 5", "Call of Duty", "PUBG"),
    "AVENTURA" => array("Assassins Creed", "Crash Bandicoot", "Prince of Persia"),
    "DEPORTES" => array("FIFA 19", "PES 19", "MOTO GP 19")
);

$categorias = array_keys($tabla);

?>

<table border="1px">
        <?php require_once 'Ejercicio5/encabezado.php';?>
        <?php require_once 'Ejercicio5/primera.php';?>
        <?php require_once 'Ejercicio5/segunda.php';?>
        <?php require_once 'Ejercicio5/tercera.php';?>

</table>
