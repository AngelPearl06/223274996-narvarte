<?php
$pass = "";
$confirmpass = "password123";

do{
  $pass = readline("Please enteer the pasasword: ");
  
  if($pass !== $confirmpass){
    echo "Incorrect password.\n";
  }
}while($pass !== $confirmpass);

echo "Acess Granted";
?>