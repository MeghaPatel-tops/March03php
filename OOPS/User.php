<?php
class User{
    public $userId,$userName,$email;

    //parameterized constructor
    function __construct($userId,$userName,$email){
        $this->userId=$userId;
        $this->userName=$userName;
        $this->email=$email;
    }

    function ShowUserdata(){
        echo "<h1>".$this->userId."</h1>";
        echo "<h1>".$this->userName."</h1>";
        echo "<h1>".$this->email."</h1>";
    }
}

$user1 = new User("ui1","megha","megha@gmail.com");
$user2 = new User("uid2","malay","malay@gmail.com");

$user1->ShowUserdata();
$user2->ShowUserdata();

?>
