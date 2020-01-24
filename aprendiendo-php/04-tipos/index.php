<!--Tipos de datos y gettype -->
<?php

//Con comillas dobles "" despliega el valor de una variable usando echo
//comillas simples nop.
    $numero = 0;
    echo gettype($numero).'<br/>';
    
    $decimal = 0.5;
    echo gettype($decimal).'<br/>';
    
    $texto = "Soy texto";
    echo gettype($texto).'<br/>';
    
    $verdadero = true;
    echo gettype($verdadero).'<br/>';
    
    $nula = NULL;
    echo gettype($nula);
    
    
    //Debugging
    $randomVar = "Kept you waiting huh?";
    var_dump($randomVar);
    
    $randomVar2[] = "Kept you waiting huh?";
    var_dump($randomVar2);

?>
