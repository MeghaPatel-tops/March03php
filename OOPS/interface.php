<?php

interface CommanTask{
     function display();//abstract method
     function show();
}

class Child implements CommanTask{
    public function display(){
        echo "<h1>Interface example</h1>";
    }
    public function Show(){
        echo "<h1>hello</h1>";
    }
}

$c1= new Child();
$c1->display();
$c1->show();


?>