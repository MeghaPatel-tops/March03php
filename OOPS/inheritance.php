<?php
class Connect{
    public $connection;
    function __construct(){
        echo "parent class";
      $this->connection = new mysqli("localhost","root","","finalproject");
    }

    function checkConnection(){
        if(isset($this->connection)){
            echo "Db connected";
        }
        else{
            echo "not connected";
        }
    }
}

class User extends Connect{
    public
        function __construct(){
            parent::__construct();
            echo "child class";
        }
        function getUserData(){
            $query = "select * from users";
            $req=$this->connection->query($query);
            while($row=$req->fetch_object()){
                $rw[]=$row;
            }
             echo "<pre>";
            print_r($rw);
        }
}

$user1 = new User();
$user1->checkConnection();//
$user1->getUserData();



?>