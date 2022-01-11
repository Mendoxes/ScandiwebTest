<?php

abstract class Product
{
    protected $name;
    protected $price;
    protected $type;
    protected $id;

    function __construct($name, $price, $type, $id)
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->id = $id;
    }
    abstract function setDescription($data);
    abstract function getDescription();
}
