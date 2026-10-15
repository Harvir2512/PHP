<html>
<body>
<form method="post">
    Enter Starting Number:
    <input type="number" name="a"><br><br>

    Enter Ending Number:
    <input type="number" name="b"><br><br>

    <input type="submit" value="submit">
</form>
</body>
</html>

<?php
 
  if(isset($_POST['a']) && isset($_POST['b']))
  {
     $a=$_POST['a'];
     $b=$_POST['b'];

    echo "Prime Numbers are: ";

    for($i=$a; $i<=$b; $i++)
    {
        $f=0;

        if($i<2)
        {
            continue;
        }

        for($j=2; $j<$i; $j++)
        {
            if($i % $j==0)
            {
                $f=1;
                break;
            }
        }

        if($f==0)
        {
            echo $i ." ";
        }
    }
}
?>