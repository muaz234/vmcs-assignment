<?php
 class Drink{
    public $id;
    public $name;
    public $brand;
    public $price;
    public $quantity;
    public $created;

    public function __construct($id, $name, $brand, $price, $quantity, $created)
    {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->created = $created;
    }

    public function getId()
    { 
        return $this->id;
     }

     public function setId($id)
     {
        $this->id = $id;
     }


    public function getName()
    { 
        return $this->name; 
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getBrand()
    { 
        return $this->brand; 
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getPrice()
    {
         return $this->price;
     }

     public function setPrice($price)
     {
         $this->$price = $price;
     }
    public function getQuantity()
    { 
        return $this->quantity; 
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getCreated()
    {
         return $this->created;
     }

     public function setCreated($created)
     {
         $this->created = $created;
     }

 }


?>