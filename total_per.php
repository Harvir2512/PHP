<html>
  <body>
  <form method="POST" action="#">
   Enter DM number :
   <input type="number" name="t1"><br><br>
   Enter DS number : 
   <input type="number" name="t2"><br><br>
   Enter SF number : 
   <input type="number" name="t3"><br><br>
   Enter BD number : 
   <input type="number" name="t4"><br><br>
   Enter PHP number : 
   <input type="number" name="t5"><br><br>
  
   
   <br><br>
  <input type="submit" value="submit">
  </form> 
 </body>
</html>

<?php

if(isset($_POST["t1"]))
{
 $DM=$_POST["t1"];
 $DS=$_POST["t2"];
 $SE=$_POST["t3"]; 
 $BD=$_POST["t4"];
 $PHP=$_POST["t5"];

$Total=$DS+$DM+$PHP+$SE+$BD;

$PER=$Total/5;

 echo" Total marks=".$Total;

 echo "percentage=".$PER;
}
?>