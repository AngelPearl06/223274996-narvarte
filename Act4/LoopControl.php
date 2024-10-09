<?php
for($a =1; $a <= 10; $a++){
  if ($a == 5){
    continue;
  }
  if ($a == 9){
    break;
  }
  echo "$a ";
}
?>