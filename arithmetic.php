<?php
//Arithmetic operators
// * - + / ** %
$x = 30;
$y = 60;
$z = null;

$z = $x + $y;
echo " The sum is {$z}<br>";

$z = $x - $y;
echo "{$z} <br>";

$z = $x * $y;
echo "{$z} <br>";

$z = $x / $y;
echo "{$z}<br>";

//raise or power
$z = $x**3;
echo "{$z}<br>";

//modulus operator which gives us the remainder
$z= $x % 7;
echo "{$z}<br>";


//increment and decrement

$counter = 10;
$counter++;
echo "{$counter} <br>";

//decrement
$counter--;
echo "{$counter} <br>";

//operator precedence

$total = 1+2 - 3*4 / 5**70;
/*
1. () bracket work
2. ** raise to power
3. * / %
4. * -
*/
echo $total;

?>