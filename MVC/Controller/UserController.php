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
        if($id==0){
            $products = $this->selectData("products");
        }
        else{
            $products = $this->findById("products",["catid"=>$id]);
        }
        
        if(isset($products)){
            echo json_encode($products);
        }
    }

    public function addToCart($pid){
            if(!$_SESSION && $_SESSION == [])  {
                echo "fail";
                echo "<script>alert('please Login');</script>";
                header("Location: ".$GLOBALS['baseurl']."user");
            }
            else{
                $cartArray=[
                    "pid"=>$pid,
                    "userid"=>$_SESSION['user']->uid,
                    "qty"=>1
                ];
                $cartdata = $this->insertData("cart",$cartArray);
                if($cartdata){
                    header("Location: ".$GLOBALS['baseurl']."user");
                }
            }
    }

    public function getCartCount(){
        $count =0;
        
        if($_SESSION && $_SESSION != [])  {
            $uid= $_SESSION['user']->uid;
            $cartdata = $this->findById("cart",["userid"=>$uid]);
            if(isset($cartdata)){
                $count = count($cartdata);
            }
        }
        echo $count;
    }
    public function viewCart(){
        
        
        if($_SESSION && $_SESSION != [])  {
            $uid= $_SESSION['user']->uid;
            $join = ["products"=>"cart.pid=products.pid"];
            $cartdata = $this->selectDataJoinWhere("cart",$join,["userid"=>$uid]);
            include('View/User/cart.php');
        }
        
    }
}    
?>