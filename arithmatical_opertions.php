<html>
<body>
<form method="post">
    Enter First Number:
    <input type="number" name="a" required><br><br>

    Enter Second Number:
    <input type="number" name="b" required><br><br>

    Select Operation:
    <select name="op">
        <option value="1">Addition</option>
        <option value="2">Subtraction</option>
        <option value="3">Multiplication</option>
        <option value="4">Division</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

</body>
</html>
<?php
 if (isset($_POST['op']))
  {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $op = $_POST['op'];

     switch ($op)
     {
        case 1:
            echo "Addition = " . ($a + $b);
            break;

        case 2:
            echo "Subtraction = " . ($a - $b);
            break;

        case 3:
            echo "Multiplication = " . ($a * $b);
            break;

        case 4:
            if ($b != 0)
            {
                echo "Division = " . ($a / $b);
            }
            else
            {
                echo "Cannot divide by zero";
            }
            break;
    }
}
?>