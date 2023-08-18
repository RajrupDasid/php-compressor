<?php
$temp= 15;
$cloudy = true;

//and && logical operator

//if($temp >=0 && $temp <=30)

if ($temp < 0 || $temp > 30){
    echo "Weather is bad<br>";
}else{
    echo "Weather is good <br>";
}

if(!$cloudy){
    echo "It's cloudy";
}else{
    echo "it's sunny";
}
?>