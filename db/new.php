<?php 
include("db.php");
$username="carl123";
$password="lossantoss@69";
$hash=password_hash($password,PASSWORD_DEFAULT);
$sql="INSERT INTO USERS (USER,PASSWORD)
VALUES('$username','$hash')";
try{
    mysqli_query($conn,$sql);
    echo"registered successfully <br>";
}
catch(mysqli_sql_exception)
{
    echo"could not register <br>";
}
mysqli_close($conn);

?>