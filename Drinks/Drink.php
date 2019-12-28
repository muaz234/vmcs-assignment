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
 }


?>