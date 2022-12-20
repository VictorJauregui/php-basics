<?php

$cities = array("Madrid", "Barcelona", "Sevilla");
print_r($cities);

echo "<br><br>";

$nums = array(2, 3.5, 5, 5.8, 9);
print_r($nums);

echo "<br><br>";

$gaming = array (
    array("Ps5",16,19),
    array("NSwtich",17,12),
    array("XboxScorpion",4,1),
    array("Wii",20,12)
);

  echo $gaming[0][0].": In stock: ".$gaming[0][1].", sold: ".$gaming[0][2].".<br>";
  echo $gaming[1][0].": In stock: ".$gaming[1][1].", sold: ".$gaming[1][2].".<br>";
  echo $gaming[2][0].": In stock: ".$gaming[2][1].", sold: ".$gaming[2][2].".<br>";
  echo $gaming[3][0].": In stock: ".$gaming[3][1].", sold: ".$gaming[3][2].".<br>";

  echo "<br><br>";

$cities = array("Madrid", "Barcelona", "Sevilla");
echo count($cities);

#Concatenar arrays;

$spanishcities = array("Madrid", "Barcelona", "Sevilla");
$frenchcities = array("paris","Toulosse");

$europeancities = array_merge($spanishcities, $frenchcities);

print_r($europeancities);

echo "<br><br>";

#Coger ultimo parametro de un array;

$colors = array("red", "yellow", "blue", "pink");
echo end($colors);

echo "<br><br>";

#Introducir un nuevo parametro en un array;

$colors = array("red", "yellow", "blue", "pink");
array_push($colors, "brown", "black");

print_r($colors);

  
?>