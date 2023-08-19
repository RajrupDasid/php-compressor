<?php
//hashing in php

$password = "pizza123";
$hash = password_hash($password,PASSWORD_ARGON2I);
//echo $hash;

if(password_verify("laracroft",$hash)){
    echo "you are logged in";
}else{
    echo "Incorrect password";
}
?>