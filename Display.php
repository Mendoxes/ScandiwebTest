<?php
require "Database.php";

class Display
{
   public $db;
   public $result;
   function __construct()
   {
      $this->db = new Database();
   }
   public function setData($data)
   {
      $this->db->query("SELECT * FROM $data");
      return $this;
   }
   function getData()
   {
      $this->result = $this->db->resultset();
      for ($i = 0; $i <= count($this->result) - 1; $i++) 
      {
         echo "<div class='card eachCard' style='width: 18rem;'>
               <div class=card-header>
               SKU: " . ($this->result[$i])->sku . "
                </div>
               <ul class='list-group list-group-flush'>
                <input class='delete-checkbox' type=checkbox name=chk_id[] value=" . ($this->result[$i])->sku . ">
                 <li class='list-group-item'>NAME: " . ($this->result[$i])->name . "</li>
                 <li class='list-group-item'>PRICE: " . ($this->result[$i])->price . "$</li>
                 <li class='list-group-item'>" . ($this->result[$i])->attrType . ": " . ($this->result[$i])->attributes . "</li>
               </ul>
               </div>";
      }
   }
}