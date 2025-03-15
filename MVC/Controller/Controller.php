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
                    $result=$this->insertData("category",$productData);
                    if(isset($result)){
                        header("Location: ".$GLOBALS['baseurl']."category");
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

    public function deletecategory($id){

        if(isset($id)){
            $catdata = $this->findOne("category",['cid'=>$id]);
           echo  $image = "Uploads/".$catdata->cimage;
            unlink($image);
           $result= $this->deleteData("category",["cid"=>$id]);
           if(isset($result)){
              header("Location: ".$GLOBALS['baseurl']."category");
           }
        }

    }

    public function editcategory($id){

        if(isset($id)){
           $catdata = $this->findOne("category",['cid'=>$id]);
           include('View/categoryedit.php');
           if(isset($_REQUEST['submit'])){
            $cname = $_REQUEST['cname'];
            if(isset($_FILES['cimage']['name']) && $_FILES['cimage']['name']!="") {
               
                $name = $_FILES['cimage']['name'];
                $temp= $_FILES['cimage']['tmp_name'];
                $extname= $_FILES['cimage']['type'];
                $extarray = explode("/",$extname);
                $ext = $extarray[1];
                if($ext == "jpeg" || $ext =="jpg" || $ext == "png"){
                    $filename = time().".".$ext;
                    move_uploaded_file($temp,"Uploads/".$filename);
                }
                else{
                    echo "select propar file";
                }
                
            }
            else{
                $filename=$catdata->cimage;
                $productData = ["cname"=>$cname,"cimage"=>$filename];
                    $result=$this->updateData("category",$productData,['cid'=>$id]);
                    if(isset($result)){
                        header("Location: ".$GLOBALS['baseurl']."category");
                    }
            }
        }
        }

    }
}


?>