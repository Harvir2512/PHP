<html>
  <head>
    <style>
        h2
          {
              color:green;
          }
    </style>
  </head>
 <body>
   <form method="POST" action="#">
     Enter Name :
     <input type="text" name="name1"><br><br>
     Enter Adress :
     <input type="address" name="address1"><br><br>
     Enter Contacts :
     <input type="number" name="contacts1"><br><br>
     Enter Source :
     <input type="text" name="source1"><br><br>
     Enter  Destiontion :
     <input type="text" name="destination1"><br><br>
     Enter Date_Journey :
     <input type="date" name="date_journey1"><br><br>
     Enter Gender :
     <input type="radio" name="gender1" value="male">male
     <input type="radio" name="gender1" value="female">female<br><br>
     Enter no_of_persons :
     <input type="number" name="no_of_persons1"><br><br>
     Enter Price_Per_Ticket :
     <input type="number" name="price_per_ticket1"><br><br>
     <input type="submit" value="submit">

    </form>
   </body>
 </html>
<?php


 
 if(isset($_POST["name1"]))
 {
  $name=$_POST["name1"];
  $address=$_POST["address1"];
  $contacts=$_POST["contacts1"];
  $source=$_POST["source1"];
  $destination = $_POST["destination1"];
  $date_of_journey = $_POST["date_journey1"];
  $gender=$_POST["gender1"];
  $no_of_persons=$_POST["no_of_persons1"];
  $price_per_ticket=$_POST["price_per_ticket1"];
 
echo"<h2> Air Ticket Reservation:</h2> <br><br>";

$total=$no_of_persons*$price_per_ticket;
echo"Name=".$name."<br>";
echo"Address=".$address."<br>";
echo"Contact no=".$contacts."<br>";
echo"Source=".$source."<br>";
echo "Date of journey=".$date_of_journey."<br>";
echo"Destination=".$destination."<br>";
echo"Gender=".$gender."<br>";
echo"No_of_person=".$no_of_persons."<br>";
echo"Price=".$price_per_ticket."<br>";
echo"Total=".$total;
}

?>