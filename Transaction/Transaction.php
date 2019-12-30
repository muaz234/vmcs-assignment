<?php
 class Transaction{
    public $id;
    public $drink_id;
    public $quantity;
    public $total_price;
    public $balance;
    public $balance_paid;
    public $completed;
    public $created;

    public function __construct($id, $drink_id, $quantity, $total_price, $balance, $balance_paid, $completed, $created)
    {
        $this->id = $id;
        $this->drink_id = $drink_id;
        $this->quantity = $quantity;
        $this->total_price = $total_price;
        $this->balance = $balance;
        $this->balance_paid = $balance_paid;
        $this->completed = $completed;
        $this->created = $created;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDrinkId()
    {
        return $this->drink_id;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getTotalPrice()
    {
        return $this->total_price;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getBalancePaid()
    {
        return $this->balance_paid;
    }

    public function getCompleted()
    {
        return $this->completed;
    }

    public function getCreated()
    {
        return $this->created;
    }
 }


?>