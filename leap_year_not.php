<html>
<body>
<form method="post">
    Enter Year:
    <input type="number" name="year" required>
    <input type="submit" value="Check">
</form>

</body>
</html>

<?php
if (isset($_POST['year']))
{
    $year = $_POST['year'];

    if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0))
    {
        echo "Leap Year";
    }
    else
    {
        echo "Not a Leap Year";
    }
}
?>