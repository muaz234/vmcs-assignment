<?php
require '../db_connect.php';
$now = new DateTime();
 class Drink{
    public $id;
    public $name;
    public $brand;
    public $price;
    public $quantity;
    public $type;
    public $on_sale;
    public $updated;
    public $created;

    public function __construct($id, $name, $type, $brand, $price, $quantity, $on_sale, $created, $updated)
    {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->type = $type;
        $this->on_sale = $on_sale;
        $this->quantity = $quantity;
        $this->created = $created;
        $this->updated = $updated;
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

     public function getUpdated()
     {
         return $this->updated;
     }

     public function setUpdated($updated)
     {
         $this->updated = $updated;
     }

 }
 $drink_1 = new Drink(1, "chocolate", "can_drink", "dutchlady", 0.70, 0, 1,  $now->format('Y-m-d  H:i:s'), $now->format('Y-m-d  H:i:s'));
 $drink_2 = new Drink(2, "strawberry", "can_drink", "dutchlady", 0.90, 0, 1, $now->format('Y-m-d  H:i:s'), $now->format('Y-m-d  H:i:s'));
 $drink_3 = new Drink(3, "sarsi", "can_drink", "F&N", 1.10, 0, 1, $now->format('Y-m-d  H:i:s'), $now->format('Y-m-d  H:i:s'));
 $drink_4 = new Drink(4, "sprite", "can_drink", "F&N", 0.80, 0, 1, $now->format('Y-m-d  H:i:s'), $now->format('Y-m-d  H:i:s'));
 $drink_5 = new Drink(5, "coke", "can_drink", "F&N", 0.80, 0, 1, $now->format('Y-m-d  H:i:s'), $now->format('Y-m-d  H:i:s'));
// $drink_1_serialize = json_encode($drink_1, true);
// var_dump($drink_1_serialize);
    $sql = "INSERT INTO drinks (id, name, type, price, brand, quantity, on_sale, created_on, updated_on) VALUES ('$drink_3->id', '$drink_3->name', '$drink_3->type', '$drink_3->price', '$drink_3->brand',  '$drink_3->quantity', '$drink_3->on_sale', '$drink_3->created', '$drink_3->updated')";
    $exec = mysqli_query($db, $sql) or die(mysqli_error($db));
    $stmt = mysqli_affected_rows($db);
// mysqli_affected_rows($db);
if($stmt>0)
{
    echo "Rows created " .$stmt;
}

?>