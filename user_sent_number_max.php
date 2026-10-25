<html>
 <body>
   <form method="POST" action="#">
    Enter a Value :
    <input type="number" name="t1"><br><br>
    Enter b value :
    <input type="number" name="t2"><br><br>
    Enter c value :
    <input type="number" name="t3"><br><br>
    <input type="submit" name="submit">

   </form>
 </body>
</html>

<?php
 if(isset($_POST["t1"]))
 {
  function maximum($a,$b,$c)
  {
     if($a>$b && $a>$c)
     {
        return $a;
     }
     else if($b>$a && $b>$c)
     {
        return $b;
     }
     else
     {
        return $c;
     }
  }
  $a=$_POST["t1"];
  $b=$_POST["t2"];
  $c=$_POST["t3"];

  $ans=maximum($a,$b,$c);
  echo "maximum=".$ans;
 }
?>