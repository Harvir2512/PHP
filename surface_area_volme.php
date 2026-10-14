<html>
  <body>
  <form method="POST" action="#">
   Enter l number :
   <input type="number" name="t1"><br><br>
   Enter b number : 
   <input type="number" name="t2"><br><br>
   Enter h number : 
   <input type="number" name="t3">
 
   <br><br>
  <input type="submit" value="submit">
  </form> 
 </body>
</html>

<?php

 if(isset($_POST["t1"]))
 { $l=$_POST["t1"];
   $b=$_POST["t2"];
   $h=$_POST["t3"];

  $SA=2*($l*$b+$l*$h+$b*$h);

  $V=$l*$b*$h;


 echo"surface area=".$SA;

 echo"volume=".$V;
}
?>