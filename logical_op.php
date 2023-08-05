<?php
$citizen = true;
$age=10;
if(!$citizen || $age<18)
{
    echo "you cannot vote";
}
else
{
    echo "you can vote";
}
?>