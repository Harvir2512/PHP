<html>
<body>
<form method="post" action="#">
    Enter Percentage:
    <input type="number" name="per" min="0" max="100">
    <input type="submit" value="check Grade">
</form>
</body>
</html>

<?php
  if(isset($_POST['per']))
   {
    $per=$_POST['per'];

    if($per<0 || $per>100)
    {
        echo "Invalid Percentage";
    }
    elseif($per<40)
    {
        echo "Grade = Fail";
    }
    elseif($per<=50)
    {
        echo "Grade=Pass Class";
    }
    elseif($per<=60)
    {
        echo "Grade=Higher Second Class";
    }
    elseif($per<=70)
    {
        echo "Grade=First Class";
    }
    else
    {
        echo "Grade=First Class with Distinction";
    }
}
?>