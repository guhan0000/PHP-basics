<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio</title>
</head>
<body>
    <form action="radio.php" method="post">
        <input type="radio" value="visa" name="card">visa<br>
        <input type="radio" value="mastercard" name="card">master card<br>
        <input type="radio" value="rupay" name="card">rupay<br>
       <input type="submit" name="confirm">
    </form>
</body>
</html>
<?php
if(isset($_POST["confirm"]))
{
    $card=null;
    if(isset($_POST["card"]))
    {
         $card=$_POST["card"];
    }
   
    if($card=="visa")
    {
        echo"you selected visa";
    }
    else if($card=="mastercard")
    {
        echo"you selected mastercard";
    }
    elseif($card=="rupay")
    {
        echo"you selected rupay";
    }
        
    
    else{
    echo"please select a card"; 
}
    
}


?>