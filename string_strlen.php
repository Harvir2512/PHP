<html>
  <head>
    <style>
         h1{
             color:red;
           }
         b{
             color:green;
          }
         hr{
             color:red;
           }
         i{
             color:black;
           }

    </style>
   </head>
</html>

<?php

 echo "<h1 align='center'>ALL STRING FUNCTIONS</h1>";
 
 echo "<marquee><h2><b><i>created by. Harvir Varma</i></b></h2></marquee>";
  echo "<hr>";

  
 echo "<b>1) strlen</b><br>";
 $a="harvir";
 echo "count the string=".strlen($a);
 echo "<hr>";

 
 echo "<b>2) trim</b><br>";
 $a=" hello      harvir welcome to syntax\n";
 echo "remove the extra space and other charter=".trim($a);
 echo "<hr>"; 
 

 echo "<b>3) strtolower</b><br>";
 $a="HELLO HARVIR WELCOME SYNTEX";
 echo "lowercase chrater =".strtolower($a);
 echo "<hr>";
 
 echo "<b>4) strtoupper</b><br>";
 $a="hello harvir welcome to syntax";
 echo "uppercase chrater =".strtoupper($a);
 echo "<hr>";
 
 echo "<b>5) ucfirst</b><br>";
 $a="hello";
 echo "first word convert uppercase=".ucfirst($a);
 echo "<hr>";
 
 
 echo "<b>6) ucwords</b><br>";
 $a="hello harvir welcome to syntex";
 echo "sentecs to convert first word in uppercase=".ucwords($a);
 echo "<hr>";

 
 echo "<b>7) ucfirst</b><br>";
 $a="hello";
 $b="hello";
 echo "compare two chrater=".strcmp($a,$b);
 echo "<hr>";
  
 
 echo "<b>8) ucfirst</b><br>";
 $a="I AM HARVIR";
 echo "return a part of string =".substr($a,3);
 echo "<hr>";

 
 echo "<b>9) strrev</b><br>";
 $a="hello harvir welcome to syxtax";
 echo "reverse string =".strrev($a);
 echo "<hr>";


 echo "<b>10) substr_count</b><br>";
 
 echo "lower chrater =".substr_count("hello harvir","harvir");
 echo "<hr>";


 echo "<b>11) str_pad</b><br>";
 $a="hello harvir";
 echo "lt pads a string to a new length=".str_pad($a,20,"*");
 echo "<hr>";
?>