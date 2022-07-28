<?php
$num = readline("Enter the n number: ");
$n = $num;
$sum = 0;
while ($n >= 0) {
    $sum = $sum + $n;
    $n--;
}
echo "Sum of $num number is: $sum";
?>
