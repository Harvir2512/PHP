<html>
<body>
<form method="post">
 Select Day:
 <select name="day">
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
 </select>
 <input type="submit" value="Change Color">
</form>
</body>
</html>

<?php
  
  if(isset($_POST['day']))
  {
    $day=$_POST['day'];

   switch($day)
   {
        case "Monday":$color="red"; break;
        case "Tuesday":$color="yellow"; break;
        case "Wednesday":$color="green"; break;
        case "Thursday":$color="blue"; break;
        case "Friday":$color="pink"; break;
        case "Saturday":$color="orange"; break;
        case "Sunday":$color="lightblue"; break;
   }

    echo "<style>body { background-color:$color; }</style>";
    echo "Today is ".$day;
 }
?>