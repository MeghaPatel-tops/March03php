<?php
ob_start();
include("Model/Model.php");
include("Controller/Controller.php");

$objController  = new Controller();

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
else{
    
}

// $objController->aboutpage();

?>