<?php
$num = 5;
$factorial = 1;

for ($p = $num; $p >= 1; $p--){
  $factorial *= $p;
}
echo "Factorial of $num is: $factorial\n";

?>