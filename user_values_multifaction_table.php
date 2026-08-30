<html>
 <head>
 </head>
 <body>
   <from method="POST" action="">
    enter number
    <input type="number" name="t1">
    <input type="submit" value="submit">
   </from>
 </body>
<html>
<?php
 $num=$_POST["t1"];

 for($i=1; $i<=10; $i++)
 {
   echo "<br>".&num*$i;
 }
?>