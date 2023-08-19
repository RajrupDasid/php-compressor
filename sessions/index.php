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
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username" id="username"><br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="login" name="login"><br>
    </form>
</body>
</html>

<?php
if(isset($_POST["login"])){
    echo "is set working";
    if(!empty($_POST["username"]) &&
       !empty($_POST["password"])){
        echo "empty clause working";
        $_SESSION["username"]=$_POST["username"];
        echo "username stack woking";
        $_SESSION["username"]=$_POST["password"];
        echo "password stack working";

        header("location: home.php");

       }else{
        echo "Missing username or password";
       }

}

/*
$_SESSION["username"] = "LaraCroft";
$token = "&(Q#&#&$(@&$(@&()&$)nsdasdlkajskldjalsk";
$_SESSION["password"] = hash("sha512",$token);

echo $_SESSION["username"] . "<br>" . "<br>";
echo $_SESSION["password"] . "<br>" . "<br>";
*/
?>
