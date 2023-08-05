<?php
$movies=array("vijay"=>"leo","kamal"=>"vikram","rajni"=>"jailer");
echo $movies["vijay"]."<br>";
$movies["vijay"]="master";
echo $movies["vijay"];
$movies["surya"]="ayan";
echo"<br>";
$flipped=array_flip($movies);
foreach($movies as $key => $value)
{
    echo "{$key}={$value} <br>";
}
echo"<br>";
echo"<br>";
foreach($flipped as $key => $value)
{
    echo "{$key}={$value} <br>";
}
$keyval=array_keys($movies);
echo"<br>";
echo"<br>";
foreach($keyval as $key)
{
    echo $key."<br>";
}

?>