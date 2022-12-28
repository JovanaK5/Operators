<?php

  //sample1
  
  $maths = "50" ;
  $english = "60" ;
  $science = "80" ;
  $totalMarks = $maths + $english + $science ;

  echo "Students total marks : $totalMarks for English($english) + Maths($maths) + Science($science)" . PHP_EOL ."<br>";

 //sample2
  echo "Students total marks : $totalMarks for English($english) + Maths($maths) + Science($science)" . PHP_EOL ."<br>";

  echo "Students total marks : $maths + $english + $science for English($english) + Maths($maths) + Science($science)" . PHP_EOL ."<br>" ;
 
 //sample3
  $totalSubjects = 300 ;
  $totalDifference = $totalSubjects - $totalMarks;
  echo "Difference between total and marks achieved : $totalDifference ". PHP_EOL."<br>";
 
 //sample4
 $length = 10;
 $breath = 20;
 $area = $length * $breath;
 echo $area . PHP_EOL."<br>";