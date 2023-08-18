<!-- if statement exercise php-->
<?php
$hours =50;
$rate = 70;
$weekly_pay = null;
if ($hours<=0){
    $weekly_pay;
}
elseif($hours <=40){
    $weekly_pay = $hours * $rate;
}else{
    $weekly_pay = ($rate * 40) +(($hours - 40) * ($rate * 1.5));
}
echo "You made \${$weekly_pay} this week";
?>