<?php


class Validate {
    private $db;
private $result;
function __construct(){
   $this->db = new Database();

}
function skuData($data){
    

$this->db->query("SELECT * FROM `products` WHERE `sku` = '$data'");

   $this->result = $this->db->resultset();

if(!empty($this->result)){

return true;
}

else {return false;}


}}


?>


