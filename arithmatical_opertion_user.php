<html>
 <body>
  <form method="POST" action="#">
   Enter A value :
   <input type="number" name="t1"><br><br>
   Enter B value :
   <input type="number" name="t2"><br><br>
  
  <input type="submit" name="submit">
 
  </form>
 </body>
</html>

<?php

 if(isset($_POST["submit"]))
 { 
  function Calculate($a,$b)
  {
     echo "Addition=".$a + $b."<br>";
     echo "Subtraction=".$a - $b."<br>";
     echo "Multiplication=".$a * $b."<br>";
     echo "Division=".$a / $b;
  }

  Calculate($_POST["t1"],$_POST["t2"]);
 }
?>