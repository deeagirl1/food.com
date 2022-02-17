<?php
require_once('Food.php');
require_once('dbh.php');
?>

<?php

class ShoppingCart extends Dbh
{
    public function GetFood($OrderID)
    {
      $foods = array();
      $sql = "SELECT m.ID, m.Name, m.Description, m.Price * Count(*) as TotalPrice , Count(*) as Quantity FROM OrderItem o INNER JOIN Meal m ON o.Meal = m.ID Where o.OrderID = $OrderID group by m.ID";
      $sth = $this->conn->prepare($sql);
      $sth->execute();
 
      if ($sth->rowCount() > 0) {
        // output data of each row
        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
         $food = new Food($row["ID"],$row["Name"],$row["Description"],$row["TotalPrice"]);
         $food->SetQuantity($row["Quantity"]);
         array_push($foods, $food);
        }
        return $foods;
      } else {
        return 0;
      }
    }
   

    public function NewOrder()
    {
      $sql = "INSERT INTO foodorder(Customer) VALUES (:customer)";
      $sth = $this->conn->prepare($sql);
      $sth->execute([
        ':customer' => $_SESSION['ID']
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

    public function Proceed($OrderID)
    {
      $time = date('Y-m-d H:i:s');
      $sql = "UPDATE foodorder SET ProcessedTime='$time',Status=2 WHERE ID = :OrderID";
      $sth = $this->conn->prepare($sql);
      $sth->execute([
        ':OrderID' => $_SESSION['OrderID']
      ]);
      $this->NewOrder();
    }

}

?>