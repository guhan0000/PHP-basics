<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php"  method="post">
        <input type="checkbox"  name="ironman" value="Ironman">Ironman<br>
        <input type="checkbox" name="captainamerica" value="Captain America">Captain America<br>
        <input type="submit" name="confirm">



    </form>
    
</body>
</html>
<?php

if(isset($_POST["confirm"]))
{
    if(isset($_POST["ironman"]))
    {
        echo"i luv u 3000";
    }
    if(isset($_POST["captainamerica"]))
    {
        echo"i can do this all day";
    }

}
?>