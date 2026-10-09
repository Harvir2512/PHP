<?php

  class fruit
  {
    public $name;
    public $color;
    public $price;

    function accept($name,$color,$price)
    {
       $this->name=$name;   
       $this->color=$color;   
       $this->price=$price;   
    }
    function disp()
    {
       echo "<br>fruit name=".$this->name;
       echo "<br>fruit color=".$this->color;
       echo "<br>fruit price=".$this->price;
    }
  } 
    $ob1=new fruit();
    $ob2=new fruit();
    $ob1->accept("apple","red",40);
    $ob2->accept("pineapple","yellow",30);

    $ob1->disp();
    $ob2->disp();
?>