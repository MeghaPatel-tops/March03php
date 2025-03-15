<?php
class Product{
    private $pid,$pname,$price;//data member

    function getProductData(){//member function
        $this->pid=121;
        $this->pname="Laptop";
        $this->price=210000;
    }
}
$p1 = new Product();
$p1->getProductData();
echo $p1->pname;
$p2= new Product();
$p2->pname;


?>