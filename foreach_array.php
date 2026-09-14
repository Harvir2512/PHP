<?php

 $a=array(10,"om"=>25,50,23.55);

 print_r($a);
 
 echo "count of array ".count(foreach($a as $val));
 foreach($a as $val)
 {
    echo "<br>".$val;
 }
?>