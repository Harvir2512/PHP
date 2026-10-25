<html>
 <body>
   <form method="POST" action="#">
    Enter a Value :
    <input type="number" name="t1"><br><br>
    Enter b raise to :
    <input type="number" name="t2"><br><br>
   
    <input type="submit" name="submit">

   </form>
 </body>
</html>

<?php

  if(isset($_POST["t1"]))
  {
     function swap($a,$b)
     {
      echo "swaping before:";
       echo "a value=".$a."<br>";
       echo "b value=".$b."<br><br>";
        $temp=$a;
        $a=$b;
        $b=$temp;
        
       echo "swaping after:";
        echo "a value=".$a."<br>";
        echo "b value=".$b;
     }
     $a=$_POST["t1"];
     $b=$_POST["t2"];
     swap($a,$b); 
  }

?>