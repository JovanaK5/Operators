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