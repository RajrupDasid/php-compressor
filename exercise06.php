<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise06.php" method="post">
        <label>Username</label><br><br>
            <input type="text" name="username" id="username"><br><br>
        <label>Password</label><br><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="login" value="Login"><br><br>
    </form>
</body>
</html>

<?php

foreach($_POST as $key => $value ){
    echo "{$key} = {$value} <br>";
}

// if (isset($_POST["login"])){
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     if(empty($username)){
//         echo "Username is Missing";
//     }
//     elseif(empty($password)){
//             echo "Password is Missing";
//     }
//     else{
//         echo "Hello {$username}";
//     }
// }
?>