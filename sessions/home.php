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
    This is our Home page
    <br>
    <br>
    <form action="home.php" method="post">
        <input type="submit" value="logout" name="logout">
        <br>
        <br>
    </form>
</body>
</html>
<?php
if(isset($_POST["logout"])){
    session_destroy();
    header("location: index.php");

}else{
echo "Your session key hasbeen stolen by a mother fucker" . "<br>";
echo "Don't trust any mother fukcer in your life because they are all theives stole your precious time";
}

?>