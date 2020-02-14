<?php

/* 
 * Imprimir por pantalla las tablas 1-10 con html
 */

echo "<table border='1px' <tr>"; //Inicio de tabla

echo "<tr>"; //Inicio fila 1 de celdas
for($cabecera=1; $cabecera <=10; $cabecera++){
    echo "<td>Tabla del $cabecera</td>";
}
echo "</tr>";//Cerrar fila 1 de celdas

echo "<tr>";//fila 2
for($i=1; $i<=10; $i++){
    echo "<td>";
        for($x=1;$x<=10;$x++){
            echo "$i x $x = ".($i*$x)."</br>";
        }
    echo "</td>";
}
echo "</tr>";//cerrar fila 2
echo "</table>"; //Fin de tabla

?>