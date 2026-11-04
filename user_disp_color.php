<?php
 
   $name = $_POST['name'];
   $color = $_POST['color'];

?>

 <html>
   <body style="background-color:<?php echo $color; ?>">

  <h1>Welcome <?php echo $name; ?></h1>

</body>
</html>