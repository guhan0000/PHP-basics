<?php
//string
$name="guhan";
$place="trichy";
$degree="B.E";
$status="unmarried";
$age=21;
$year=4;
$total=null;

$food="pizza";
$quantity=4;

$employed=true;
$online=false;

$price=106.90;
$percentage=81.23;

echo"hello {$name}, you are {$age} years old<br>
 you are doing {$year} in {$degree} in {$place} <br>your percentage is {$percentage}%";
 echo"<br>your salary is {$price}\$<br>";
 echo"you have ordered {$quantity} x {$food}<br>";
 $total=$quantity*$price;
 echo"you have to pay \${$total}";
 echo"your employnment status is{$employed}&your online status is {$online}";
 echo "{$status}";
?>
