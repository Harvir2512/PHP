<html>
 <body>
  <form method="POST" action="#">
   Enter Book No:
   <input type="number" name="t1"><br><br>
   Enter Book Name :
   <input type="text" name="n1"><br><br>
   Enter publiction :
   <input type="date" name="d1"><br><br>
   Enter Author :
   <input type="text" name="n2"><br><br>
   Enter Book price :
   <input type="number" name="t2"><br><br>

  <input type="submit" name="submit">
 </form>
 </body>
</html>



<?php

 if(isset($_POST["submit"]))
 {
  class Book
  {
     public $Book_no;
     public $Book_name;
     public $pub;
     public $Author;
     public $Book_price;

     function accept($Book_no,$Book_name,$pub,$Author,$Book_price)
     {
       $this->no=$Book_no;
       $this->name=$Book_name;
       $this->publication=$pub;
       $this->writer=$Author;
       $this->price=$Book_price;
     }

     function disp()
     {
       echo "Book no=".$this->no;
       echo "<br>Book name=".$this->name;
       echo "<br>Book publication=".$this->publication;
       echo "<br>Book writer=".$this->writer;
       echo "<br>Book price=".$this->price;
     }
  }
   $ob1=new Book();

   $ob1->accept($_POST["t1"],$_POST["n1"],$_POST["d1"],$_POST["n2"],$_POST["t2"]);

   $ob1->disp();
 }
 ?>