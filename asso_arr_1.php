<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="asso_arr_1.php" method="post">
        <label for="">enter a movie</label>
        <input type="text" name="movie">
        <br>
        <input type="submit" value="actor">


    </form>
</body>
</html>
<?php
$key=$_POST["movie"];
$movies=array("leo"=>"vijay","vikram"=>"kamal","jailer"=>"rajni");
echo"{$key} = {$movies["$key"]}";
?>