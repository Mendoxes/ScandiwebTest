<?php
require_once "Database.php";
require "Validate.php";


class Create extends Validate{
    public $skuNumber;
    private $validator;
    

function __construct($id,$name,$price,$description, $data){

$this->skuNumber = $id;
parent::__construct();
$this->validator = $this->skuData($id);

if(!$this->validator){
    $obj = new Database();
    $sql ="INSERT INTO `products` (`sku`, `name`, `price`, `attributes`,`attrType`) 
VALUES ('$id', '$name', '$price', '$description','$data');";
$obj->query($sql);

$obj->execute();
header("Location:index.php");
}

else {echo "this sku alredy exists";}
}



   

}

