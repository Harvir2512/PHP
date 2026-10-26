<html>

 <body>

<?php

  if(isset($_POST["submit"]))
   {
    $font = $_POST["n1"];
    $bgcolor = $_POST["n2"];
    $masg = $_POST["n3"];
   }

  echo "<body style='font-family:$font; background-color:$bgcolor;'>";

  echo "<h2>".$masg."</h2>";

?>

</body>
</html>