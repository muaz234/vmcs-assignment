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
 }


?>