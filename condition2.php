<?php
  /*  $age = 25;
    $citizen = true;

   // if($age >= 18 && $citizen)
   if(!$age > 18 || $citizen ){
        echo "You cannot vote";
    }else{
        echo "You can vote";
    }*/
    $child = true;
    $senior = false;
    $ticket = null;

    if ($child || $senior){
        $ticket =10;
    }else{
        $ticket = 15;
    }
    
    echo "The ticket price is \${$ticket}";
?>