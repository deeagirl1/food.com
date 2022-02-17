<?php
require_once('Food.php');
require_once('dbh.php');
?>

<?php
class Restaurant extends Dbh
{
    

    public function GetFood()
    {
      $foods = array();
      $sql = "SELECT * FROM meal";
      $sth = $this->conn->prepare($sql);
      $sth->execute();
 
      if ($sth->rowCount() > 0) {
        // output data of each row
        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
         $Food = new Food($row["Name"],$row["Description"],$row["Price"],$row["ID"]);
         $Food->SetInStock($row["inStock"]);
         array_push($foods, $Food);
        }
        return $foods;
      } else {
        return 0;
      }
    }

    public function AddFood(Food $food) 
    {
      $sql = "INSERT INTO meal(NAME,DESCRIPTION,PRICE) VALUES (:name, :description, :price) ";
      $sth = $this->conn->prepare($sql);
      $sth->execute([
        ':name' => $food->GetName(),
        ':description' => $food->GetDescription(),
        ':price' => $food->GetPrice()
      ]);
    }

    public function RemoveFromStock(int $id)
    {
      $sql = "UPDATE meal SET inStock = '0' where ID = :id";
      $sth = $this->conn->prepare($sql);
      $sth->execute([
        ':id' => $id
      ]);
    }

    public function ReturnToStock(int $id)
    {
      $sql = "UPDATE meal SET inStock = '1' where ID = :id ";
      $sth = $this->conn->prepare($sql);
      $sth->execute([
        ':id' => $id
      ]);
    }

    public function DeleteFood(Food $food)
    {
      $sql = "DELETE FROM meal(NAME,DESCRIPTION,PRICE) VALUES (:name, :description, :price) ";
      $sth = $this->conn->prepare($sql);
      $sth->execute([
        ':name' => $food->GetName(),
        ':description' => $food->GetDescription(),
        ':price' => $food->GetPrice()
      ]);
    }
}

?>