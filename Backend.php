<?php

 $name=$_POST["fullname"];
 $userid1=$_POST["UserId"];
 $pass1=$_POST["Password"];
 $pass2=$_POST["Confirm_Passwrod"];
 $Gender1=$_POST["Gender"];
 $Address1=$_POST["address"];
 $Hobby1=$_POST["Hobby"];

 $con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,"register");
 echo "Data selected";

 $insert1="insert into personal values('$name',$userid1,$pass1,
 $pass2,'$Gender1','$Address1','$Hobby1')"; 

 echo "<br>";
 mysql_query($con,insert1);
 echo "data inserted";

 echo "<br>";
 $select=mysqli_query($con,select * from personal");
 echo "<table border=1>";
 echo "<tr><th>NAME</th>
  
 echo "name=".$name;
 echo "<br>user id=".$userid1;
 echo "<br>pass1=".$pass1;
 echo "<br>pass2=".$pass2;
 echo "<br>Gender=".$Gender1;
 echo "<br>address=".$Address1;
 echo "<br>Hobby=".$Hobby1;