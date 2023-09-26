<?php
include("db.php");
$sql="INSERT INTO users(user,password)
VALUES('James','maghgkl')";

mysqli_connect($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>WELCOME TO website</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
<label for="">usename</label><br>
<input type="text" name="uname"><br>
<label for="">password</label><br>
<input type="text" name="pwd"><br>
<input type="submit" name="register" value="register">




    </form>
</body>
</html>

<?php
mysqli_close($conn);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $user=$_POST["uname"];
    $pass=$_POST["pwd"];
}
if(empty($user))
{
    echo"enter username";
}
else{
    echo"enter password";
}
?>