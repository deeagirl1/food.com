<?php
 class Food
  {
    private $id;
    private $name;
    private $description;
    private $price;
    private $quantity;

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

    public function __construct(int $id, string $name, string $description, float $price)
  {
  $this->id = $id;
  $this->name = $name;
  $this->price = $price;
  $this->description = $description; 
  }

}
 ?>