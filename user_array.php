<html>
  <head>
       <style>
             h1{
                  color:green;
               }
       </style>
  </head>
   
  <body>

   <form method="POSt" action="#">
 
   <h1> USER ELEMANTS ACCPET IN ARRAY </h1>
   Enter array limit :  
   <input type="number" name="t0"><br><br>
     

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
