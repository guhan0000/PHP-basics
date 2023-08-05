<?php
$actors = array("dicaprio","tom hardy","cillian murphy","brad pit");
$actress=array("margot robbie","alexandra","emily blunt","zendaya","elizabeth olsen","sydney sweeney","ana de armas");
//echo $actors[3];
/*for($i=0;$i<5;$i++)
{
    echo $actors[$i]."<br>";
}
*/
$actors[4]="rdj";
$actors[5]="guhan";
$actors[5]="christian bale";
array_push($actors,"heath ledger","vin diesel");//push 1 or more values to the end of the array
array_pop($actors);//removes last element of an array
array_shift($actors);

foreach($actors as $actor)
{
    echo $actor."<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
foreach($actress as $actres)
{
    echo $actres."<br>";
}

$new_actors=array_merge($actors,$actress);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
foreach($new_actors as $new_actor)
{
    echo $new_actor."<br>";
    
}
echo "<br>";
echo "<br>";
$reversed = array_reverse($new_actors);
foreach($reversed as $rev)
{
    echo $rev."<br>";

    
}
echo count($actors);
?>