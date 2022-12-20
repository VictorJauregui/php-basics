<?php


for($i = 1; $i < 5; $i++){
    echo "$i";
}
echo "<br><br>";

$cities = array("sevilla", "Barcelona", "Real Madrid");
foreach($cities as $city){
    echo "Esta ciudad es : $city <br>";
}

$numero = 1;
while($numero < 10){
    echo "El nuero $numero es menor que 10 <br>";
    $numero++;
}

$numero2 = 2;

do{
    echo $numero2;
    $numero2++;
} while ($numero2 <= 10);

?>