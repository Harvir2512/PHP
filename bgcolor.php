<html>
  <body>
    <form method="POST" action="#">
     Enter Your Name :
      <input type="text" name="t1"><br><br>
     Enter Your background Color :
      <input type="text" name="t2"><br><br>

     <input type="submit" name="submit"> 
    </form>
  </body>   

<?php

 if(isset($_POST['submit']))
 {
   $name=$_POST['t1'];
   $color=$_POST['t2'];
 }
?>
 <head>
   <style>
          h1
          {
               color:black;
          }
   </style>
 <head>
 <body bgcolor="<?php echo $color; ?>">
   <h1>Welcome to Syntax class <?php echo $name; ?></h1>
 </body>
</html>