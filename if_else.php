<?php
$hours=1150;
$rate=15;
$weeklypay=null;
if($hours<=0)
{
    $weeklypay=0;

}
elseif($hours>40)
{
    $weeklypay= ($rate*40)+(($hours-40)*($rate*1.5));
}
else{
    $weeklypay= ($rate*40);
}
echo "you have made \${$weeklypay}";
?>