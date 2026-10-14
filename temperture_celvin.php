<html>
 
 <body>
  <form method="POST" action="#">
   Enter c number :
   <input type="number" name="t1"><br><br>
 
   <br><br>
  <input type="submit" value="submit">
  </form> 
 </body>
</html>

<?php

  if(isset($_POST["t1"]))
{
   $c=$_POST["t1"];

   $f=$c*(9/5)+32;
 echo "fahernheit=".$f;
}
?>