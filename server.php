<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> 
        username:<br><br>
        <input type="text" name="username" id="username"><br><br>
        <input type="submit" value="login"><br>
    </form>
    </body>
    </html>
</body>
</html>


<?php
//foreach($_SERVER as $key => $value){
  //      echo "{$key} = {$value} <br> <br> ";
//}
?>