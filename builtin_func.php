<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="builtin_func.php" method="post">
    <label for="">x:</label>
    <input type="text" name="x"><br>
    <label for="">y:</label>
    <input type="text" name="y"><br>
    <label for="">z:</label>
    <input type="text" name="z"><br>
    <input type="submit" value="result">
    </form>
    
</body>
</html>
<?php
$x=$_POST["x"];
$y=$_POST["y"];
$z=$_POST["z"];
echo $x."<br>";
echo $y."<br>";
echo $z."<br>";
$result=null;
//$result=abs($x);
//$result=round($x);
//$result=floor($x);
//$result=ceil($x);
//$result=max($x,$y);
//$result=min($x,$y);
//$result=pi();
//$result=pow($x,19);
$result=sqrt($x);
echo "result is ".$result."<br>";
echo rand(1,100);

?>