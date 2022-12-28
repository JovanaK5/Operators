<?php
  
  //sample1
  
  $permission = true;
  $loogedin = true;
  $user = "John";

  echo ($permission and $loogedin) ? "Hello $user" :
  "Hello guest";
  echo "<br>";
 

  //sample2

  $user = "Jovana";
  $mathspassed = true;
  $historypassed = true;

  echo ($mathspassed or $historypassed) ? "$user has passed" :
  "$user has not passed";
  echo "<br>";

  //sample3
  $result1 = true && false ;
  $result2 = true and false;

  echo ($result1) ? "true" : "false" ;
  echo PHP_EOL; 
  echo ($result2) ? "true" : "false" ;
  echo "<br>" ;