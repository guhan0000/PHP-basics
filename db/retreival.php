<?php
include("db.php");
//$sql="SELECT * FROM users WHERE user='carl123'";
$sql2="SELECT * FROM users";
$result = mysqli_query($conn,$sql2); //result is an object
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo $row["id"]."<br>";
    echo $row["user"]."<br>";
    echo $row["password"]."<br>";
    echo $row["reg_date"]."<br>";
    }
    //$row=mysqli_fetch_assoc($result);
    /*echo $row["id"]."<br>";
    echo $row["user"]."<br>";
    echo $row["password"]."<br>";
    echo $row["reg_date"]."<br>";*/
}
else{
    echo"user not found";
}
mysqli_close($conn);
//password_needs_rehash()
?>
