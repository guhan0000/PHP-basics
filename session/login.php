<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="login.php" method="post">
    <label for="">username</label><br>
    <input type="text" name="username"><br>
    <label for="">password</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="login" name="login">

    </form>
</body>
</html>
<?php
if(isset($_POST["login"]))
{
    if(!empty($_POST["username"]) && $_POST["password"] )
    {
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];
        header("Location: home.php");
        //echo"{$_SESSION["username"]}<br>";
       // echo"{$_SESSION["password"]}<br>";
    }
    else{
        echo"username/password is missing";
    }
   /* $_SESSION["username"]=$_POST["username"];
    $_SESSION["password"]=$_POST["username"];
    echo"{$_SESSION["username"]}<br>";
    echo"{$_SESSION["password"]}<br>";*/

}

?>