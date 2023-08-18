<!-- php orderpage exercise-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise1.php" method="post">
        <label>quantity</label></br><br>
        <input type="text" name="quantity" id=""><br><br>
        <input type="submit" value="total"/><br>
    </form>
</body>
</html>

<?php
    $item = "pizza";
    $price = 8.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;

    echo "You have orderer {$quantity} x {$item}s <br>";
    echo "Your total is : \${$total}"

?>