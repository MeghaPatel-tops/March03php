<?php
include("Model/Model.php");
include("Controller/Controller.php");

$objController  = new Controller();

$uri_str = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri_array = explode('/', $uri_str);
$path = $uri_array[3];

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
    echo "users";
}
else{
    
}

// $objController->aboutpage();

?>