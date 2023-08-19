<?php
//set cookie in php
$getip = $_SERVER["REMOTE_ADDR"];
//$remotehost = $_SERVER['REMOTE_HOST'];
setcookie("fav_food",$value = "pizza",time() + (3000*2),$path="",$domain="",$secure=true,$httponly=true);
setcookie("Client_ip",$value =$getip ,time() + (3000*3),$path="",$domain="",$secure=true,$httponly=true);

foreach($_COOKIE as $key => $value){
    echo "{$key} = {$value} <br>";
}
if(isset($_COOKIE["PHPSESSID"])){
    echo "THE session token is present in the request";
}else{
    echo "session token not present";
}
?>