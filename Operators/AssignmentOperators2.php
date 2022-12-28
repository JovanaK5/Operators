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

  // -= operator
  $counter = 1;
  $counter -=  $counter ;
  echo $counter. PHP_EOL;

  // *= operator
  $a = 5;
  $a *= $a;
  echo $a. PHP_EOL;

