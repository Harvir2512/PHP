<html>
 <body bgcolor="red">
  
  <h1>aritmathcial opreater</h1>
  
   1.addition
   2.subtraction
   3.multifaction
   4.division
 
   <from method="get" action="#">
   enter first number
   <input type="nummber" name="t1"><br>
   enter seconed number
   <input type="number" name="t2"><br>
  
   enter your chioce
   <input type="number" name="t3"><br>
   <input type="submit">
  </from>
 </body>
</html>

<?php

 $num1=$_get["t1"];
 $num2=$_get["t2"];
 $ch=$_get["t3"];

 switch($ch)
 {
   case 1:
   {
       $ans=$num1+$num2;
       echo "addition=".$ans;
       break;
   }
   case 2:
   {
    
       $ans=$num1-$num2;
       echo "substraction=".$ans;
       break;
   }
   case 3:
   {
    
       $ans=$num1*$num2;
       echo "mutifaction=".$ans;
       break;
   }
   case 4:
   {
    
       $ans=$num1%$num2;
       echo "division=".$ans;
       break;
   }
 }
?>