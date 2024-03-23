<?php
$year=readline("enter year: ");

if(($year%4==0 && $year%100!=0)||($year%400==0))
{
     echo"Given year is leap year";
}
else{
    echo"not leap year";
}
?>