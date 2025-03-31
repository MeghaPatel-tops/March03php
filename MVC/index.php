<?php
ob_start();
session_start();
include("Model/Model.php");
include("Controller/Controller.php");
include("Controller/ProductController.php");
include("Controller/UserController.php");


$objController  = new Controller();
$objProduct = new ProductController();
$objUser = new UserController();

$uri_str = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri_array = explode('/', $uri_str);
$path = $uri_array[3];
$queryparams = isset($uri_array[4]) ? $uri_array[4] : 0;

$GLOBALS['baseurl']="http://localhost/march03php/MVC/";

if(isset($path) && $path==""){
    $objController->homepage();
}
else if($path == "category"){
    $objController->categoryview();
}
else if($path == "categoryadd"){
    $objController->categoryadd();
}
else if($path == "users"){
   
}
else if($path == "deletecategory"){
   $objController->deletecategory($queryparams);
}
else if($path == "editcategory"){
    $objController->editcategory($queryparams);
 }
 else if($path == "product"){
    $objProduct->productview();
 }
 else if($path == "productadd"){
    $objProduct->productadd();
 }
 else if($path == "editproduct"){
    $objProduct->productedit($queryparams);
 }
 else if($path == "user"){
   $objUser->userIndex();
}
else if($path == "userreg"){
   $objUser->Registration();
}
else if($path == "userlogin"){
   $objUser->Login();
}
else if($path == "userlogout"){
   $objUser->Logout();
}

else if($path == "getProduct"){
   $objUser->getProductByID($queryparams);
}

else if($path == "addtocart"){

   $objUser->addToCart($queryparams);
}
else if($path == "getCartCount"){

   $objUser->getCartCount();
}

else if($path == "viewCart"){

   $objUser->viewCart();
}


else{
    
}

// $objController->aboutpage();

?>