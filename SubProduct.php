<?php
require_once "Create.php";

class DVD extends Product
{
    protected $description;
    function setDescription($data)
    {
        $this->description = $data["size"] ."MB";
    }
    function getFullDescription()
    {
        new Create($this->id, $this->name, $this->price, $this->description, 'size');
    }
}

class Book extends Product
{
    protected $description;
    function setDescription($data)
    {
        $this->description = $data["weight"] ."KG";
    }
    function getFullDescription()
    {
        new Create($this->id, $this->name, $this->price, $this->description, 'weight');
    }
}
class Furniture extends Product
{
    protected $description;
    function setDescription($data)
    {
        $this->description = $data["height"] ."X".$data["width"]."X".$data["length"]."cm" ;
    }
    function getFullDescription()
    {
        new Create($this->id, $this->name, $this->price, $this->description, 'dimensions');
    }
}
