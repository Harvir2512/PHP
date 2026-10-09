<?php

 $num=1857;

 $s=sun_of_digit($num);
 function sun_of_digit($num)
 {
   $s=0;
   while($num>0)
  {
    $d=$num%10;
    $s=$s+$d;
    $num=$num/10;
  }
   return $s;
 }
  echo "sum of digit=".$s;
?>