<?php
session_start();
?>
<!--php maths-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="phpmaths.php" method="post">
        <label>X:</label>
        <input type="text" name="x" id=""><br>
        <label >Y:</label>
        <input type="number" name="y"><br>

        <label >Z:</label>
        <input type="number" name="z"><br>

        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    //echo $x;
    $y =  $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //power function
    //$total = pow($x,$y);

    //sqare root function
    //$total = sqrt($x);
    
    //max function;
    
    //$total = max($x,$y,$z);
    
    //min function;
    
    //$total = min($x,$y,$z);

    //pi function
    //$total = pi();

    //random function
    $total = rand();
    echo $total;
    


    //absolute functiom

    //$total = abs($x);

    //echo $total

    //round function

    //$total = round($x);

    //floor function

    //$total = floor($x);

    //ceil function all time rounding up 

    //$total = ceil($x);

    //echo  $total;

    

?>