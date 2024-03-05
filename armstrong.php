<?php
$num = readline("Enter  number: ");
$total = 0;
$x = $num;
while ($x != 0) {
    $rem = $x % 10;
    $total = $total + $rem * $rem * $rem;
    $x = $x / 10;
}
if ($num == $total) {
    echo "  Armstrong number";
} else {
    echo " given number is not an armstrong number";
}
?>