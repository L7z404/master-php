<?php

//Funciones predefinidas

//Debug
$name = "Leonel";
var_dump($name);

//Fechas
echo date('d-m-y');
echo "<br/>";
echo time();

//Matematicas
echo "<br/>";

echo "Raiz cuadrada de 10: ". sqrt(10);
echo "<br/>";

echo "Numero aleatorio entre 10 y 40: ".rand(10,40);
echo "<br/>";

echo "Numero pi: ".pi();
echo "<br/>";

echo "Redondear: ". round(7.32432490238,2); //round(float,cuantos decimales)
echo "<br/>";

//Más funciones y eso
echo "<br/>";
echo gettext($name);
echo "<br/>";

//Detectar tipado
if (is_string($name)) {
    echo "Esa variable es un string";
}
echo "<br/>";

if (!(is_float($name))){
    echo "La variable nombre no es un numero con decimales";
}
echo "<br/>";

//Comprobar si existe una variable
if (isset($edad)) {
    echo "La variable existe";
} else {
    echo "La variable no existe";
}
echo "<br/>";

//Limpiar espacios
$frase = "             cosas            ";
var_dump(trim($frase));

//Eliminar variables / Indices
$year = 2020;
unset($year);
//var_dump($year);

//Comprobar variable vacia
$texto="";
if(empty($texto)){
    echo "La variable texto esta vacia";
} else {
    echo "La variable texto tiene contenido";
}

//String caracters
echo "<br/>";
$Sttring = "l7z404";
echo strlen($Sttring);
echo "<br/>";

//Encontrar caracter
$frases = "Algo y siempre o sabe";
echo strpos($frase, "a");

echo "<br/>";

//Remplazar palabras
$frases = str_replace("Algo", "Nada", $frases);
echo $frases;
echo "<br/>";
//mayuscuas y minusculas
echo strtolower($frases);
echo "<br/>";
echo strtoupper($frases);
?>