<?php

class User{
    public static $objCount;
    public function __construct(){
        User::$objCount++;
    }

    public static function display(){
        echo User::$objCount;
    }
}
User::$objCount=0;
$u1= new User();
$u2= new USer();

User::display();




?>