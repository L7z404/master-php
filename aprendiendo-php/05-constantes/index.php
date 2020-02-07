<?php
    //constantes

    define('nombre', 'Leonel Castillo');
    define('web', 'www.google.com');

    
    echo '<h1>'.nombre.'</h1>';
    echo '<h1>'.web.'</h1>';
    
    //variables
    $web = "www.google.com.mx/mexico";
    echo '<h1>'.$web.'</h1>';
    
    //Constantes predefinidas
    echo PHP_VERSION.'<br/>';
    echo PHP_OS.'<br/>';
    echo __LINE__.'<br/>';
    echo __FILE__.'<br/>';
   
    function holaMundo(){
        echo __FUNCTION__;
    }
    holaMundo();
    

?>
