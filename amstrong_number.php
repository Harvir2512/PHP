<html>
<body>
 <form method="post">
  Enter Limit:
   <input type="number" name="n" max=500>
   <input type="submit" value="Display">
</form>
</body>
</html> 

<?php
  if(isset($_POST['n']))
  {
    $n=$_POST['n'];

    for($i=1; $i<=$n; $i++)
    {
        $temp=$i;
        $sum=0;

        while($temp>0)
        {
            $r=$temp % 10;
            $sum=$sum+($r*$r*$r);
            $temp=(int)($temp/10);
        }

        if ($sum==$i)
        {
            echo $i ." ";
        }
    }
}
?>