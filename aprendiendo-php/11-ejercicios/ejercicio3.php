<?php

/*
for($i=1; $i<=40.; $i++){
    echo $i*$i;
    echo '<br/>';
}
*/
$contador = 0;
while ($contador <= 40){
    $cuadrado = $contador*$contador;
    echo "<h2>El cuadrado de $contador es $cuadrado<h2>";
    $contador++;
}
?>