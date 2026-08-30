<html>
 <head>
    <style>
         h1
           {
             color:green;
           }
    </style>
 </head>
 <body>
 <h1>multifaction table </h1>
   <form method="POST" action="#">
    enter number
    <input type="number" name="t1"><br>
    <input type="submit" value="submit">
   </form>
 </body>
<html>
<?php
 $num=$_POST["t1"];

 echo "<h1>multifaction table for user number</h1>";
 for($i=1; $i<=10; $i++)
 {
   echo "<br>".$num*$i;
 }
?>