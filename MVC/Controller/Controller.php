<?php
class Controller extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function homepage(){
        include('View/home.php');
    }

    public function categoryadd(){
        include('View/categoryadd.php');
        if(isset($_REQUEST['submit'])){
            if(isset($_FILES['cimage']['name'])){
                $cname = $_REQUEST['cname'];
                $name = $_FILES['cimage']['name'];
                $temp= $_FILES['cimage']['tmp_name'];
                $extname= $_FILES['cimage']['type'];
                $extarray = explode("/",$extname);
                $ext = $extarray[1];
                if($ext == "jpeg" || $ext =="jpg" || $ext == "png"){
                    $filename = time().".".$ext;
                    move_uploaded_file($temp,"Uploads/".$filename);
                    $productData = ["cname"=>$cname,"cimage"=>$filename];
                    $reault=$this->insertData("category",$productData);
                    if(isset($reault)){
                        echo "Data Successfully inserted";
                    }
                }
                else{
                    echo "select propar file";
                }
                
            }
        }
    }

    public function categoryview(){
        $catdata=$this->selectData("category");
        include('View/categoryview.php');
    }
}


?>