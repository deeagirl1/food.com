<?php
require_once('Food.php');
require_once('dbh.php');
require_once('ShoppingCart.php');
?>

<?php
class Restaurant extends Dbh
{
    private $foods = array();

    public function GetFood()
    {
      $foods = array();
      $sql = "SELECT * FROM meal WHERE inStock = '1' ";
      $sth = $this->conn->prepare($sql);
      $sth->execute();
 
      if ($sth->rowCount() > 0) {
        // output data of each row
        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
         array_push($this->foods, new Food($row["ID"],$row["Name"],$row["Description"],$row["Price"] ));
        }
        return $this->foods;
      } else {
        return 0;
      }
    }
   
    public function Set($array)
    {
      $this->foods = $array;
    }

    public function Add(Food $food) //for admins
    {
      $sql = "INSERT INTO foods(NAME,DESCRIPTION,PRICE) VALUES (:name, :description, :price) ";
      $sth = $this->conn->prepare($sql);
      $sth->execute([
        ':name' => $food->GetName(),
        ':description' => $food->GetDescription(),
        ':price' => $food->GetPrice()
      ]);
    }



}

?>