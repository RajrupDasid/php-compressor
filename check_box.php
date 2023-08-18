<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check_box.php" method="post">
        <input type="checkbox" name="food[]"  value="Pizza"> Pizza <br>
        <input type="checkbox" name="food[]" value="Hamburger"> Hamburger <br>
        <input type="checkbox" name="food[]" value="Hotdog"> Hotdog <br>
        <input type="checkbox" name="food[]" value="Taco">Taco <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        // if(isset($_POST["pizza"])){
        //         echo "You like pizza  <br>";
        // }
        // if(isset($_POST["hamburger"])){
        //     echo "You like hamburger <br>";
        // }
        // if(isset($_POST["hotdog"])){
        //     echo "You like hotdog <br>";
        // }
        // if(isset($_POST["taco"])){
        //     echo "You like taco <br>";
        // }
        // if(empty($_POST["pizza"])){
        //         echo "You don't like pizza  <br>";
        // }
        // if(empty($_POST["hamburger"])){
        //     echo "You don't like hamburger <br>";
        // }
        // if(empty($_POST["hotdog"])){
        //     echo "You don't like hotdog <br>";
        // }
        // if(empty($_POST["taco"])){
        //     echo "You don't like taco <br>";
        // }

        $foods = $_POST["foods"];

        foreach($foods as $food){
            echo $food . "<br>";
        }
    }
?>