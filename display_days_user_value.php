<html>
 <body>
  <form method="POST" action="#">
   Enter Day Charater :
   <input type="text" name ="n1"><br><br>

  <input type="submit" name="submit">

  </form>
 </body>
</html>

<?php

 if(isset($_POST["n1"]))
 {
  function DisplayDay($a)
  {
     echo date("$a");
  } 

  DisplayDay($_POST["n1"]);
 }
?>