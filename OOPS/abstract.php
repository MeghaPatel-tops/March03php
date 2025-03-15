<?php
abstract class Parents{
    abstract function display();//abstract method

    public function Show(){
        echo "<h1>hello</h1>";
    }
}
class Child extends Parents{
    public function display(){
        echo "<h1>Abstract method redefine in child class</h1>";
    }
}

$c1 = new Child();
$c1->display();
$c1->Show();

?>