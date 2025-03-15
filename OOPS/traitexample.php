<?php

trait ArrayFunction{
        function sortArray($inputArray){
            sort($inputArray);
            print_r($inputArray);
        }
}
trait StringFunction{
     function convertUppercase($str){
         echo strtoupper($str);
     }
}

class Child{
      use ArrayFunction;
      use StringFunction;
}

$c1 = new child();
echo "<pre>";
$c1->sortArray([13,45,78,4,2,1,90]);
$c1->convertUppercase("hello");


?>