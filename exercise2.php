<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise2.php" method="post">
        <label for="">
            Radius</label>

        <input type="text" name="radius" id="">
        <input type="submit" value="calculate">
        <br>
        <br>
    </form>
</body>
</html>

<?php
$radius = $_POST["radius"];
$circumference = null;
$volume = null;
$circumference = 2 * pi() * $radius;
$circumference = round($circumference,4);
$area = pi() * pow($radius,2);
$area = round($area);

$volume  = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "The Circumferece is = {$circumference} cm <br> <br>";

echo "The Area = {$area}cm  <br>";

echo "The volume is {$volume}";

?>
