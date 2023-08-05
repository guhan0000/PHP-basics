<?php
$counter= intval( $_POST["count"]);
$sum=0;
for($i=1;$i<=$counter;$i++)
{
    $sum=$sum+$i;
    
}
echo $sum."<br>";
?>
