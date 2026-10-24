<?php
 
  if(isset($_POST['submit']))
  {
   $name = $_POST["t1"];
   $age = $_POST["t2"];

  if($age < 18)
  {
      echo "Hello " . $name . ", you are not authorized to visit the site";
  }
  else
  {
      echo "Welcome " . $name . " to this site";
  }
 }
?>