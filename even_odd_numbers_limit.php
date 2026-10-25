<html>
 <body>
   <form method="POST" action="#">
    Enter A limit :
    <input type="number" name="t1"><br><br>
  
    <input type="submit" name="submit">

   </form>
 </body>
</html>




<?php

  if(isset($_POST["submit"]))
  {
  function evenodd($A)
  {
    echo "even number limit ".$A;
    echo "<br>";
    for($i=1; $i<=$A; $i++)
    {
       if($i%2==0)
       {
          echo $i;
       }
    }
    echo "<br><br>";
    echo "odd number limit ".$A;
    echo  "<br>";
    for($i=1; $i<=$A; $i++)
    {
       if($i%2==1)
       {
          echo $i;
       }
    } 
  } 
  $A=$_POST["t1"];
  evenodd($A); 
 }
?>