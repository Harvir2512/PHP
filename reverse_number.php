<html>
<body>
 <form method="post">
  Enter Number:
  <input type="number" name="n" required>
  <input type="submit" value="Reverse">

 </form>
</body>
</html>

<?php

  if(isset($_POST['n']))
  {
    $n=$_POST['n'];
    $rev=0;

    while($n>0)
    {
        $r=$n%10;
        $rev=$rev*10+$r;
        $n=(int)($n/10);
    }

    echo "Reverse=".$rev;
}
?>