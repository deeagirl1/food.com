<?php
require_once('Food.php');
require_once('Dbh.php');
?>

<?php

class ShoppingCart extends Dbh
{
    private $foods = array();

    public function GetFood($OrderID)
    {
      $sql = "SELECT m.ID, m.Name, m.Description, m.Price * Count(*) as TotalPrice , Count(*) as Quantity FROM OrderItem o INNER JOIN Meal m ON o.Meal = m.ID Where o.OrderID = $OrderID group by m.ID";
      $sth = $this->conn->prepare($sql);
      $sth->execute();
 
      if ($sth->rowCount() > 0) {
        // output data of each row
        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
         $food = new Food($row["Name"],$row["Description"],$row["TotalPrice"],$row["ID"]);
         $food->SetQuantity($row["Quantity"]);
         array_push($this->foods, $food);
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

    public function NewOrder()
    {
      $sql = "INSERT INTO foodorder(Customer) VALUES (:customer)";
      $sth = $this->conn->prepare($sql);
      $sth->execute([
        ':customer' => $_SESSION['ID_ADM']
      ]);
      $_SESSION['OrderID'] = $this->conn->lastInsertId();
    }

    public function AddProduct($id)
    {
      $sql = "INSERT INTO orderitem(OrderID, Meal) VALUES (:orderID, :meal)";
      $sth = $this->conn->prepare($sql);
      $sth->execute([
        ':orderID' => $_SESSION['OrderID'],
        ':meal' => $id
      ]);
    }

    public function GetCount($OrderID)
    {
      $sql = "SELECT Count(*) as Quantity FROM OrderItem o INNER JOIN Meal m ON o.Meal = m.ID Where o.OrderID = $OrderID";
      $sth = $this->conn->prepare($sql);
      $sth->execute();

      $result;
 
      if ($sth->rowCount() > 0) {
        // output data of each row
        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
          $result = $row["Quantity"];
        }
        return $result;
      } else {
        return 0;
      }
    }

    public function GetTotalPrice($OrderID)
    {
      $sql = "SELECT SUM(m.Price) as Total FROM OrderItem o INNER JOIN Meal m ON o.Meal = m.ID Where o.OrderID = $OrderID";
      $sth = $this->conn->prepare($sql);
      $sth->execute();

      $result;
 
      if ($sth->rowCount() > 0) {
        // output data of each row
        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
          $result = $row["Total"];
        }
        return $result;
      } else {
        return 0;
      }
    }

}

?>