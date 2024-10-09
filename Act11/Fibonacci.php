<?php
$num1 = 0;
$num2 = 1;
$count = 0;
$total_numbers = 10;

echo "$num1 ";

while ($count < $total_numbers - 1) { 
    echo "$num2 ";  
    $next_number = $num1 + $num2;
    $num1 = $num2;
    $num2 = $next_number;
    $count++;
}
?>
