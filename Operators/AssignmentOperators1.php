<?php

  //+= operator
  
  $marks = 10;
  $name = "Jovana";

  $counter = 1;
  $counter +=  $counter ;
  echo $counter. PHP_EOL;

  $marks += $marks ; 
  echo $marks. PHP_EOL;

  $name1 = "Jovana" ; 
  $name1 .= " ," ;
  $name1 .= "Knezevic" ;
  echo $name1 . PHP_EOL;