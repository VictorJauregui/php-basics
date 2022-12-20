<?php

#SUM TWO NUMBERS
function addTwoNumbers(int $x, int $y){
    return $x + $y;
}

echo "The sum of 10 and 25 is: " .addTwoNumbers(10, 25);
echo "<br>";

# MULTIPLY TWO NUMBER

function multiplynumbers($x, $y){
    return $x * $y;
}

echo "The result of multiply number 2 and 3 is: " .multiplynumbers(2, 3);
echo "<br>";

# DIVISION TWO NUMBER

function divisionTwoNumbers($x, $y){
    return $x / $y;
}


echo "The result of the division of 10 and 2 is: ". divisionTwoNumbers(10,2);

echo "<br>";

function TwoNumbers($x, $y, $operator){
    if($operator == "add"){
        return $x + $y;
    } else if($operator == "multiply"){
        return $x * $y;
    }   
}

echo TwoNumbers(2, 5, "add");
echo "<br>";
echo TwoNumbers(2, 5, "multiply");
echo "<br>";



?>