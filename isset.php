<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset.php" method="post">
        <label for="">username</label>
        <input type="text" name="uname">
        <br>
        <label for="">password</label>
        <input type="password" name="pwd">
        <input type="submit" name="login" value="LOG IN">
    </form>
</body>
</html>
<?php
$user=$_POST["uname"];
$pass=$_POST["pwd"];

if(isset($_POST["login"]))
{
    if(isset($user)&&isset($pass))
    {
        echo $user."<br>",$pass;
    }
}
/*
    foreach($_POST as $key => $value)
    {
        echo"{$key} = {$value}";
    }
*/



/*$num="";
if(isset($num))
{
    echo "number is set";
}
else{
    echo "number is empty";
}
*/
?>