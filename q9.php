<?php

$number=[2,5,6,9,8];
$total=0;

for($i=0;$i<5;$i++)
{
    $total=$total+$number[$i];
    
}
echo"total of 5 integer value is:";
print_r($total);
?>