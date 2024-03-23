<?php

$arr=array("0"=>"Even","1"=>"Odd");
$check=readline("Enter number :");
echo "Your number is: ".$arr[$check%2];

?>