<?php

  class student
  {
    public $sno;
    public $sname;
    public $per;

    function accept($sno,$sname,$per)
    {
       $this->sno=$sno;
       $this->sname=$sname;
       $this->per=$per;
    }

    function disp()
    {
       echo "<br>student sno :".$this->sno;
       echo "<br>student sname :".$this->sname;
       echo "<br>student per :".$this->per;
    }
  }
   $ob1=new student();
   $ob2=new student();
 
   $ob1->accept(101,"sandesh",53.12);
   $ob2->accept(102,"om",78.12);

   $ob1->disp();
   $ob2->disp(); 

 ?>