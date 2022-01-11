<?php

class Delete
{
    private $db;
    function __construct(){
       $this->db = new Database();
    }
    function skuData($data)
    {
        
        foreach($data as $id)
        {
            $this->db->query("DELETE FROM `products` WHERE `sku` = '$id'");
            $this->db->execute();
        }
    }
}