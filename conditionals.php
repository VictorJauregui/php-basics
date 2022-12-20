<?php


$today = "Mon";
if(date("D") == $today){
    echo "We are on Monday";
} else {
    echo "Today is not Monday";
}

echo "<br><br>";

$Month = "Oct";
if(date("M") == $Month){
    echo "We are on October";
   
} else {
    echo "We are not in October, We are on&nbsp". date("F");
}

echo "<br><br>";

$date = date("i");

if($date <= 10){
    echo "The current minute is less than 10";
} else if ($date >= 15) {
    echo "The current minute is more than 15";
} else {
    echo "Does not meet any conditions";
}

echo "<br><br>";
#switch

$dia = date("D");

switch($dia){
    case 'Mon':
    echo "Today is monday";
    break;

    case 'Tue':
    echo "Today is tuesday";
    break;

    case 'wed':
    echo "Today is wednesday";
    break;

    case 'thu':
    echo "Today is thusday";
    break;

    case 'fri':
    echo "Today is friday";
    break;

    case 'sat':
    echo "Today is satuday";
    break;

    case 'sun':
    echo "Today is sunday";
    break;

}




?>