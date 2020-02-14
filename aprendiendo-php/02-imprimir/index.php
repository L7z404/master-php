<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP - Leonel</h1>

        
        <!--Atajo para abrir echo php -->
        <?="Something Something Something and Stuff and Stuff And Stuff"?>
        
        <br/><br/><img src="imagenes/metalgear0.jpg" alt="Imagen del juego metal gear" width="480px"/>
        
       
        <?php
            // Titulo
            echo "<h4>Listado de Videojuegos:<h4>";
            echo "<ul>"
                 . "<li>Death Stranding</li>"
                 . "<li>Skyrim</li>"  
                 . "<li>Metal Gear Solid</li>"
                 . "</ul>";
                    
            echo '<p>Datos Datos Datos'.' - '.'Videojuegos</p><hr align="Left" width="50%"/>';
            
            //Imagen
            echo '<br/><h2>Imagen Extra:<h2><img src="imagenes/metalgear1.jpg" alt="" width="400px">'; //Ultima instruccion no requiere ;
        ?>
    </body>
</html>
