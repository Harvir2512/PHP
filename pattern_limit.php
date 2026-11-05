<html>
 <body>
  <form method="POST" action="#">
   Enter PAN Number :
    <input type="text" name="t1" value="<?php echo $_POST['t1']; ?>"><br><br>
   
    <input type="submit">
  </form>
 </body>
</html>

<?php
 
    $num=$_POST['t1'];
    $p="/^[a-z]{2}[0-9]{4}[a-z]{5}$/";

    if(preg_match($p,$num))
    {
      echo "valid";
    }
    else
    {
      echo "invalid";
    }
?>