<?php
/* 
 * Muestra todos lo numeros impares entre los 2 numeros ingresador por el usuario URL($_GET)
 */

if(isset($_GET['numero']) && isset($_GET['numero2'])) {
    $numero = $_GET['numero'];
    $numero2 = $_GET['numero2'];
    
    
    if ($numero < $numero2) {
        echo "<h2>Los numeros impares entre $numero y $numero2 son:</h2>"; 
        for($numero;$numero<=$numero2;$numero++){
            if ($numero%2==1) {
               echo $numero.'<br/>'; 
            }
        }
    }else
        echo '<h2 style="color:red">'."ERROR $numero es mayor que $numero2".'<h2>';
    
} else{
    echo '<h2 style="color:red">ERROR. Introduce correctamente los valores por la URL (/?numero=x&numero2=x)<h2>';
}

?>