<?php

  $l=$_POST["t0"];


  for($i=0; $i<$l; $i++)
  {
    $a=array($_POST["t$i"]);
  } 
 echo "<br>";

  echo "<br>";

 echo "display the array elemats ";
 for($i=0; $i<$l; $i++)
 { 
   echo "<br>";
   echo $a[$i];
 }

?>
