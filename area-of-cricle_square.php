<html>
  <body>
  <form method="POST" action="#">
   Enter r number :
   <input type="number" name="t1"><br><br> 
   <br><br>
  <input type="submit" value="submit">
  </form> 
 </body>
</html>

<?php

 if(isset($_POST["t1"]))
 {  $r=$_POST["t1"];

  $circle=3.14*$r*$r;

    echo"area of circle=".$circle."<br>"; 
    $side=5; 
    
    $square=$side*$side; 
   echo"area of square=".$square."<br>";

    $lenght=10; 
    $breadth=5;

 $rectangle=$lenght*$breadth;

 echo"area of rectangle=".$rectangle;
}
?>