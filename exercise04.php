<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise04.php" method="post">
            <label>Enter a number to count down from</label>
            <input type="number" name="counter" id="">
            <input type="submit" value="count">
    </form>
</body>
</html>

<?php
//for loop = repat some ode a certain of times

    $counter = $_POST["counter"];
    $i=0;
    for($i = $counter;$i > 0; $i--){
        echo $i . "<br>";
    }

?>