<html>
<body>
<form method="post">
Enter Number:
<input type="number" name="n" required>
<input type="submit" value="Check">
</form>
</body>
</html>


<?php
  if(isset($_POST['n']))
  {
    $n=$_POST['n'];
    $sum=0;

    for($i=1; $i<$n; $i++)
    {
        if($n % $i==0)
        {
            $sum=$sum+$i;
        }
    }

    if($sum==$n && $n>0)
    {
        echo "Perfect Number";
    }
    else
    {
        echo "Not a Perfect Number";
    }
}
?>