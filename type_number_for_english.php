<html>
<body>
 <form method="post">
   Enter Number (0 to 9):
   <input type="number" name="n" min="0" max="9">
   <input type="submit" value="Display">
 </form>
</body>
</html>

<?php
  if(isset($_POST['n']))
  {
    $n=$_POST['n'];

   switch($n)
   {
        case 0: echo "Zero"; break;
        case 1: echo "One"; break;
        case 2: echo "Two"; break;
        case 3: echo "Three"; break;
        case 4: echo "Four"; break;
        case 5: echo "Five"; break;
        case 6: echo "Six"; break;
        case 7: echo "Seven"; break;
        case 8: echo "Eight"; break;
        case 9: echo "Nine"; break;
        default: echo "Invalid Number";
    }
 }
?>