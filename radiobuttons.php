<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radiobuttons.php" method="post">
            <input type="radio" name="credit_card"  value="Visa">Visa <br>
            <input type="radio" name="credit_card"  value="Mastercard">Mastercard <br>
            <input type="radio" name="credit_card"  value="American Express">American Express<br>
            <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])){

        // if(isset($_POST["credit_card"])){
        //     $credit_card = $_POST["credit_card"];
        //     echo $credit_card;
        // }else{
        //     echo "please make a selection";
        // }
        $credit_card = $_POST["creditcard"];
        switch($credit_card){
            case "Visa":
                echo "You have seletected Visa";
                break;
            case "Mastercard":
                echo "You have selected Master Card";
                break;
            case "American Express":
                echo "You have selected American Express";
                break;
            default:
                echo "Please choose a selection from those options";
        }
    }
?>