<?php
    //array = make a variable that can store multiple values

    $foods = array("apple","orange","banana","coconut");
    //array push functions
    //array_push($foods, "kiwi","mango","tango"); // adding and concatinating extras  to array;
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[0] . "<br>";
    // echo $foods[6] . "<br>";
    
    //array pop functions
    //array_pop($foods);

    //array shift function
    //array_shift($foods);

    //array reverse
    $reversed = array_reverse($foods);

    foreach($reversed as $food){
        echo $food ."<br>";
    }
?>