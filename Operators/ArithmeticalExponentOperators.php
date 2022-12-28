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

 //sample5
 $percentage = ($totalMarks / $totalSubjects)*100;
 echo "Percentage scored : $percentage%". PHP_EOL."<br>";

 //sample6
 $br1 = 100 % 5;
 echo $br1 ."<br>";

 $br2 = 102 % 5;
 echo $br2 ."<br>";

 //sample7
 $a = 10;
 $b = 20;
 $c=($a ** 2) * ($b ** 2); //($a*$a)*($b*$b)
 echo $c .PHP_EOL;

