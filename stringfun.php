<?php
    //this is string function
    
    $username = array("Lara","The", "Croft");
    
    $phone="123-456-7890";

    //strlower function
    //$username = strtolower($username);
    //strlowerfunction
    //$username = strtoupper($username);
    //$username = str_pad($usname,20,"0");
    //$phonenumber = str_replace("-","",$phone);
    //$username = strrev($username);
    //$username = str_shuffle($username);
    //$eqals = strcmp($username,$phone);
   // $count = strlen($username);
    //$index = strpos($username, " ");
    //$arg= substr($username, 0, 3);
    //$arg = substr($username, 6);
    // $fullname = explode(" ",$username);
    
    $fullname  = implode("-", $username);

    // foreach($fullname as $name){
    //      echo $name . "<br>";
    // }


    echo $fullname;
?>