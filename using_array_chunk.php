<?php
       echo "<h1 align='center'> THREES ARRAY FUNCTIONS</h1>"; 

  echo "<h2>1) array using<mark> array_chunk</mark> function</h2>";
   $a=array(10,20,30);
   print_r(array_chunk($a,3));

 
  echo "<h2>2) array using <mark>array_combine</mark> function</h2>";
   $b=array("om","sai","ram");
   $c=print_r(array_combine($a,$b));


  echo "<h2>3) array using <mark>array_diff</mark> function</h2>";
   $d=array("harvir","adil","rohan");
   $d1=array("harvir","rohit","chirag","sandesh","adil","rohan");
 
   $p=array_diff($d1,$d);
   print_r($p);
?>