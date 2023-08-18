<?php
    //associative arrays is an Array made with key and value pairs

    $capitals = array("USA"=>"Washinton DC",
                      "Japan"=>"Tokyo",
                      "South Korea" => "Seoul",
                      "India"=>"New Delhi");
    //echo $capitals["USA"];
    //add new associative data to the array;
    $capitals["USA"]="las vegas";
    $capitals["Russia"]="Moscow";
    //shift function follows FIFO method
    //array_shift($capitals);
    //arrays_pop function used LILO method
    //array_pop($capitals);

    //get all the keys from 

    // $keys = array_keys($capitals);

    // foreach($keys as $k){
    //     echo "{$k} <br>";
    // }

        //get all the values in the associative array

    // $values = array_values($capitals);

    // foreach($values as $v){
    //         echo "{$v}  <br>";
    //         echo "<br>";
    // }

    //flip function in arrays

    //$capitals = array_flip($capitals);

    //reverse function

    $capitals = array_reverse($capitals);

    foreach($capitals as $key => $value){
                echo "{$key} = {$value} <br>";
    }

?>