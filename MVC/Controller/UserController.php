<?php

class UserController extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function userIndex(){
        $catdata = $this->selectData("category");
        $productData = $this->selectData("products");
        include('View/User/userindex.php');
    }

    public function Registration(){
        if(isset($_POST['username'])){
            $user =[
                "username"=>$_POST['username'],
                "email"=>$_POST['email'],
                "password"=>$_POST['password']
            ];
            $res = $this->insertData("users",$user);
            if(isset($res)){
                header("Location: ".$GLOBALS['baseurl']."user");
            }
        }
    }
    public function Login(){
        if(isset($_POST['email'])){
            $user =[
                
                "email"=>$_POST['email'],
                "password"=>$_POST['password']
            ];
            $findlogin = $this->findOne("users",$user);
            if(isset($findlogin)){
               $_SESSION['user']=$findlogin;
               header("Location: ".$GLOBALS['baseurl']."user");
            }
        }
    }
    public function Logout(){
        if(isset($_SESSION['user'])){
            session_destroy();
            header("Location: ".$GLOBALS['baseurl']."user");
        }
    }

    public function getProductByID($id){
        $products = $this->findById("products",["catid"=>$id]);
        if(isset($products)){
            echo json_encode($products);
        }
    }
}    
?>