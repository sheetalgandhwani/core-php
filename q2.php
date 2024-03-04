<?php

$phy=readline("enter marks of physics: ");
$chem=readline("enter marks of chemistry: ");
$bio=readline("enter marks of biology: ");
$math=readline("enter marks of mathematics: ");
$com=readline("enter marks of computer: ");

$percent=($phy+$chem+$bio+$math+$com)/500*100;

echo"percentage is:$percent \n";
if($percent>90 && $percent<=100)
{
    echo"grade A";
}

else if($percent>80 && $percent<=90)
{
    echo"grade B";
}

else if($percent>70 && $percent<=80)
{
    echo"grade C";
}

else if($percent>60 && $percent<=70)
{
    echo"grade D";
}

else if($percent>50 && percent<=60)
{
    echo"grade E";
}
else if($percent>40 && percent<=50)
{
    echo"grade F";
}
else if($percent>30 && percent<=40)
{
    echo"fail";
}



?>
