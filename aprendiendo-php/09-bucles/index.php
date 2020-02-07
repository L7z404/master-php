<?php
$numero = 0;

while($numero <= 700){
    echo "$numero";
    
    if ($numero != 700) {
        echo ", ";
    }
    
    $numero++;
}

//verificar que exista numero
if (isset ($_GET['numero'])) {
    //casting... cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}


echo "<br/>";

echo "<h1>Tabla de multiplicar del número $numero</h1>";
for($contador=0; $contador<=100; $contador++){
    
    if ($numero == 45) {
        echo "Este numero es illegal jaajajajjaj.";
    }
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}



echo "<h1>Tabla de multiplicar del numero $numero</h1>";
$contador = 0;
while ($contador <= 10) {
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}

//var_dump($numero);
echo "<br/>";
$edad = 17;
$contador = 1;
do {
    echo "Tienes acceso al local privado $contador <br/>";
    $contador++;
} while ($edad>=18 && $contador <=10);
?>