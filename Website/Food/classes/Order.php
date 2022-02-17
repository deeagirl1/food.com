<?php
require_once('ShoppingCart.php');
?>

<?php
 class Order
  {
    private $id;
    private $timeCreated;
    private $timeProcessed;
    private $timeCompleted;
    private $address;
    private $items;
    private $status;

    public function GetID() : int
    {
       return $this->id;
    }
    public function SetID(int $id) 
    {
      $this->$id = $id;
    }
    public function GetItems()
    {
      return $this->items;
    }
    public function SetItems($items)
    {
     $this->items = $items;
    }
    public function GetTimeCreated()
    {
      return $this->timeCreated;
    }
    public function SetTimeCreated($time)
    {
      $this->timeCreated = $time;
    }
    public function GetTimeProcessed()
    {
      return $this->timeProcessed;
    }
    public function SetTimeProcessed($time)
    {
      $this->timeProcessed = $time;
    }
    public function GetTimeCompleted()
    {
      return $this->timeCompleted;
    }
    public function SetTimeCompleted($time)
    {
      $this->timeCompleted = $time;
    }
    public function GetStatus()
    {
      return $this->status;
    }
    public function SetStatus($status)
    {
      $this->status = $status;
    }
    public function SetAddress(string $street, int $streetNr, string $zipcode){
      $this->address = $street . " " . $streetNr . " " . $zipcode;
    }
    public function GetAddress(){
      return $this->address;
    }
    public function __construct($id, $timeCreated, $timeProcessed, $timeCompleted, $status)
    {
      $this->items = new ShoppingCart();
      $this->id = $id;
      $this->timeCreated = $timeCreated;
      $this->timeProcessed = $timeProcessed;
      $this->timeCompleted = $timeCompleted;
      $this->status = $status;
      $this->items->GetFood($this->GetID());
    }
}
 ?>