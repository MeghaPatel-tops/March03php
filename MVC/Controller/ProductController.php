<?php

class ProductController extends Model{
    public function __construct(){
        parent::__construct();
    }

     //============== product crud method============================
     public function productadd(){
         $catdata = $this->selectData("category");
         include('View/productadd.php');
         if(isset($_POST['submit'])){
            if(isset($_FILES['pimage']['name'])){
                $name = $_FILES['pimage']['name'];
                $temp= $_FILES['pimage']['tmp_name'];
                $extname= $_FILES['pimage']['type'];
                $extarray = explode("/",$extname);
                $ext = $extarray[1];
                if($ext == "jpeg" || $ext =="jpg" || $ext == "png"){
                    $filename = time().".".$ext;
                    move_uploaded_file($temp,"Uploads/products".$filename);
                    $insertdata=[
                        "pname"=>$_POST['pname'],
                        "price"=>$_POST['price'],
                        "description"=>$_POST['description'],
                        "catid"=>$_POST['category'],
                        "pimage"=>$filename,
                    ];
                    $res = $this->insertData("products",$insertdata);
                    if(isset($res)){
                        header("Location: ".$GLOBALS['baseurl']."product");
                    }
                }       
         }

            
        }
    }

    public function productview(){
        $products = $this->selectDataJoin("products",["category"=>"category.cid = products.catid"]);
        include('View/productview.php');
    }

    public function productedit($id){
        $catdata = $this->selectData("category");

        $product = $this->findOne("products",["pid"=>$id]);
        include('View/productedit.php');
        if(isset($_POST['submit'])){
            if(isset($_FILES['pimage']['name'])){
                $name = $_FILES['pimage']['name'];
                $temp= $_FILES['pimage']['tmp_name'];
                $extname= $_FILES['pimage']['type'];
                $extarray = explode("/",$extname);
                $ext = $extarray[1];
                if($ext == "jpeg" || $ext =="jpg" || $ext == "png"){
                    $filename = time().".".$ext;
                    move_uploaded_file($temp,"Uploads/products".$filename);
                    $insertdata=[
                        "pname"=>$_POST['pname'],
                        "price"=>$_POST['price'],
                        "description"=>$_POST['description'],
                        "catid"=>$_POST['category'],
                        "pimage"=>$filename,
                    ];
                    $res = $this->updateData("products",$insertdata,["pid"=>$id]);
                    if(isset($res)){
                        header("Location: ".$GLOBALS['baseurl']."product");
                    }
                }       
         }
        }
    }
}

?>