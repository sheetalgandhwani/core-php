<?php

$a='1';
$b=&$b;
$b="2$b";
echo" ".$a;
echo"".$b;

?>