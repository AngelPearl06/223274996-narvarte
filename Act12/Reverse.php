<?php
$input = readline("Input: ");
$reversed = "";
$length = strlen($input);

for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $input[$i];  
}
echo "Output: \"$reversed\"\n";
?>
