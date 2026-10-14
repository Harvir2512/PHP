<html>
 
 <body>
  <form method="POST" action="#">
   Enter a number :
   <input type="number" name="t1"><br><br>
   Enter b number : 
   <input type="number" name="t2">
 
   <br><br>
  <input type="submit" value="submit">
 </from> 
 </body>
</html>

<?php

if(isset($_POST["t1"]))
{
  $a=$_POST["t1"];
  $b=$_POST["t2"];

  $q= $a/$b;

  $r= $a % $b; 
   echo"Quotient".$q;
   echo"remainder".$r;
}
?>