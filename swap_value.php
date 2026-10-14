<html>
 
 <body>
  <form method="POST" action="#">
   Enter a number :
   <input type="number" name="t1"><br><br>
   Enter b number : 
   <input type="number" name="t2">
 
   <br><br>
  <input type="submit" value="submit">
  </form> 
 </body>
</html>
<?php

if(isset($_POST["t1"]))
{
 $a=$_POST["t1"]; 
 $b=$_POST["t2"];

 echo "before swapping:<br>"; 
 echo "a=$a<br>"; 
 echo"b=$b<br>";

$temp=$a;
$a=$b;
$b=$temp;

 echo"after swapping:<br>";
 echo"a=$a<br>";
 echo"b=$b<br>";
}
?>