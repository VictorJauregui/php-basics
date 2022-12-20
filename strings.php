<?php 
print "Print a text string";
echo "<br><br>";

$string = "Esto es una variable";
print($string);

echo "<br><br>";

print($string. " / Print a text string");

echo "<br><br>";

#replace

$city = "Estoy en Madrid";
print_r(str_replace("Madrid", "Paris", $city));

echo "<br><br>";

#ireplace

$city = "Estoy en Madrid";
print_r(str_ireplace("mADRID", "Paris", $city));

echo "<br><br>";

#Repeat

$repeat = "OoO ";
echo str_repeat($repeat, 20);

echo "<br><br>";

#length

$length = "hr r f d ee d f ttg h yuuih edgt";
echo strlen($length);

echo "<br><br>";

#Posicion de una palabra
echo strpos("Me encanta el php","php");

#Poner en mayuscula
echo strtoupper("me encanta php(mayuscula)");

echo "<br><br>";

#Poner en minuscula
echo strtolower("ME ENCANTA PHP(MINUSCULA)");

echo "<br><br>";

#Quitar y poner letras en una frase
$hola = "Hola mi nombre es Victor";
echo substr($hola, 6, -1);




?>