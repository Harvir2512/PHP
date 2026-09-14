<html>
  <head>
  </head>
   
  <body>
   <form method="POSt" action="#">
   
   enter array elemats<br>
   <input type="number" name="t1"><br>
   <input type="number" name="t2"><br>
   <input type="number" name="t3"><br>
   <input type="number" name="t4"><br>
   <input type="number" name="t5"><br>
   <input type="submit" value="submit">

   </form>
  </body>
</html>

<?php

 $a=array($_POST["t1"],$_POST["t2"],$_POST["t3"],$_POST["t4"],$_POST["t5"]);

 print_r($a);
 echo "<br>";

  echo "<br>";

  echo "count of array elemants=".count($a);
 echo "<br>";
 echo "display the array elemats ";
 for($i=0; $i<count($a); $i++)
 {
   
   echo "<br>";
   echo $a[$i];
 }

?>