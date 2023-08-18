
<?php
//how to write php variables or how variables works in php
$name = "Rajrup ";
echo $name;
$greetings = "Hello {$name} <br>"; //string formatting or concatination
echo $greetings;
$food = "Pizza";
echo "You like {$food} <br>";
$email = "fake@mail.com";
echo "Your email is {$email}<br>";
//whole integers
$age = 25;
echo "Your age is {$age}<br>";
$users = 2;
echo "There are {$users} online<br>";

//floating point
$gpa = 9.8;
echo "Your GPA is {$gpa}<br>";
$price  = 5.99;
echo "your pizza is \${$price}<br>";
$taxrate = 8.19;
echo "sales tax rate is {$taxrate}%<br>";

//booleans
// 1 means true and 0 means false
//here when we take boolean as output it doesnot display any data;
$employeed = true;
$online = true;
$for_sale = true;

echo "Online status: {$online}<br>";

$total = null;
$quantity = 11;
echo "You have ordered {$quantity}x {$food}s <br>";

$total = $quantity * $price;
echo "The total price is \${$total}";

?>