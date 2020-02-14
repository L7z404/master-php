<?php

/* 
 * Array
 */

    $libro = "Nombre del viento";
    $libros = array('Nombre del viento','Stormlight Archive','Mistborn');
    
    $singers = ['eminem','50 cent'];
    
    //Array asociativo
    $personas = array(
        'nombre' => 'Leonel',
        'apellidos' => 'Castillo',
        'web' => 'voideterno.blogspot'
        );
        var_dump($_GET);
        echo ($personas['apellidos']);
            
   // var_dump($libros[2]);
    //var_dump($singers);
    
    /*
    echo $libros[0];
    echo "<br/>";
    echo $singers[1];
    */
    
    //Recorrer con FOR
    echo "<h1>Listado de libros</h1>";
    echo "<ul>";
    for($i=0; $i<count($libros); $i++){
        echo "<li>".$libros[$i]."</li>";
    }
    echo "</ul>";
    
   
    //recorrer con for each
    echo "<h1>Listado de singers</h1>";
    echo "<ul>";
    foreach($singers as $singers){
        echo "<li>".$singers."</li>";
    }
    echo "</ul>";
    
    
    //Arrays multidimensionales
    
    $contactos = array(
        array(
            'nombre' => 'Leonel',
            'email' >= 'leo@gmail.com'
        ),
        array(
            'nombre' => 'Miguel',
            'email' >= 'miguelel@gmail.com'
        ),
        array(
            'nombre' => 'Jose',
            'email' >= 'Jose@gmail.com'
        )
    );
    
    foreach($contactos as $key => $contacto){
        var_dump($contacto['nombre']);
    }
?>