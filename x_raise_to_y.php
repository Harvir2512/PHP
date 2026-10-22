<?php

  function power($x,$y)
  {
    $s=1;
    for($i=1; $i<=$y; $i++)   
    {
       $s=$s*$x;
    }
    return $s;
  }
   
   $x=2;
   $y=3;

   echo "x raise to y=".power($x,$y);

?>
