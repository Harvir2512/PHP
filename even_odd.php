<?php

 
  function maximum($a,$b,$c)
  {
    if($a>$b && $a>$c)
      return $a;
    else if($b>$a && $b>$c)
      return $b;
    else
      return $c;
  }
 
  $ans=maximum(20,10,15);
  echo $ans;
 
?>