<?php
//Sanitize and validate in php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sani.php" method="post">
        <label for="username">username</label><br>
        <input type="text" name="username" id="username"><br>
        <input type="text" name="age" id="age"><br>
        <input type="email" name="email" id="email"><br>
        <input type="submit" value="login" name="login"><br>
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        
        //sanitization //

        // $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_FULL_SPECIAL_CHARS); // filter input sanitizes the code , and it took three inputs / types of the method, element to implement and built in or custom methods to sanitize codes '''/// here is string fultering
        // $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        // echo $username . "<br>";
        // echo "You are " . $age . "years old";
        // echo "Your email is" . $email;

        //validation//

        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            echo "That number is not valid";
        }else{
            echo "you are ". $email . "Years old";
        }
    }
?>