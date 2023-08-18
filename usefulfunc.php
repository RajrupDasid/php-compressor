<?php
// isset() == Returns True if a variable is declreared is and is different than null
//empty - determine whether a variable is empty
$username = "n";

//if(isset($username))
if(empty($username)){
    echo "This variable is empty";
}
else{
    echo "This variable is NOT empty";
}

?>