<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise05.php" method="post">
            <label >Enter a country</label>
            <input type="text" name="country" id="country">
            <input type="submit" value="enter">
    </form>
</body>
</html>

<?php

$capitals = array("USA"=>"Washinton DC",
"Japan"=>"Tokyo",
"South Korea" => "Seoul",
"India"=>"New Delhi");

$capital = $_POST["country"];
$result= $capitals[$capital];
echo "Thre capital with associated country is " . $result;
?>