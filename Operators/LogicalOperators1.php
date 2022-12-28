<?php
  
  //sample1
  
  $permission = true;
  $loogedin = true;
  $user = "John";

  echo ($permission and $loogedin) ? "Hello $user" :
  "Hello guest"."<br>";

   