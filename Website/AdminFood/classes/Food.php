<?php
 class Food
  {
    private $id;
    private $name;
    private $description;
    private $price;
    private $quantity;
    private $inStock;

    public function GetId() : int
    {
       return $this->id;
    }
      public function SetId(int $id) 
    {
      $this->$id = $id;
    }
 
    public function GetName() : string
    {
     return $this->name;
    }
    public function SetName(string $name) 
    {
    $this->$name = $name;
    }

    public function GetDescription() : string
    {
    return $this->description;
    }

    public function SetDescription(string $description)
    {
    $this->description = $description;
    }

    public function GetPrice() : float
    {
    return $this->price;
    }

    public function SetPrice(float $price)
    {
    $this->price = $price;
    }

    public function GetQuantity() : int
    {
    return $this->quantity;
    }

    public function SetQuantity(int $quantity)
    {
    $this->quantity = $quantity;
    }
    
    public function IsInStock() : bool
    {
    return $this->inStock;
    }

    public function SetInStock(int $res)
    {
      if($res == 0){$this->inStock = false;}
      else $this->inStock = true;
    }

    public function __construct(string $name, string $description, float $price, int $id = 0)
  {
  $this->id = $id;
  $this->name = $name;
  $this->price = $price;
  $this->description = $description; 
  }

}
 ?>