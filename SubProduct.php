<?php
require "Description.php";
require_once "Create.php";

class DVD extends Product
{
    protected $description;
    function setDescription($data)
    {
        $obj = new Description($data);
        $this->description = $obj->__construct($data);
        $this->description = $this->description . "MB";
    }
    function getDescription()
    {
        echo  $this->description;
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
        $obj = new Description($data);
        $this->description = $obj->__construct($data);
        $this->description = $this->description . "KG";
    }

    function getDescription()
    {
        echo  $this->description . "KG";
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
        $obj = new Description($data);
        $this->description = $obj->__construct($data);
        $this->description = $this->description . "cm";
    }
    function getDescription()
    {
        echo  $this->description . "cm";
    }
    function getFullDescription()
    {
        new Create($this->id, $this->name, $this->price, $this->description, 'dimensions');
    }
}