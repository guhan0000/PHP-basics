<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_post.php" method="get">
        <h2>register page</h2>
        <label>first name</label>
        <input type="text" name="fname"><br>
        <label for="">last name</label>
        <input type="text" name="lname"><br>
        <label for="">username</label>
        <input type="text" name="uname"><br>
        <label for="">password</label>
        <input type="password" name="pwd"><br>
        <input type="submit" value=register>


    </form>
</body>
</html>
<?php
echo $_GET["fname"]."<br>";
echo "{$_GET["lname"]}<br>";
echo "{$_GET["uname"]}<br>";
echo "{$_GET["pwd"]}<br>";
$firstname=$_GET["fname"];
echo "your first name is {$firstname}";
?>