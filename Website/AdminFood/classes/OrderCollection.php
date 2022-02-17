<?php
require_once('Order.php');
require_once('Dbh.php');

?>

<?php
class OrderCollection extends Dbh
{
    private $orders = array();

    public function GetOrders()
    {
      $orders = array();
      $sql = "SELECT f.ID, u.STREET, u.STREETNR, u.ZIPCODE, u.CITY,
             f.CreationTime, f.ProcessedTime, f.CompletedTime, s.Name as Status FROM foodorder f INNER JOIN User u on f.Customer = u.ID
             INNER JOIN `status` s ON f.Status = s.ID WHERE NOT f.Status = 1 ORDER BY s.ID ASC, f.ProcessedTime DESC";
      $sth = $this->conn->prepare($sql);
      $sth->execute();
 
      if ($sth->rowCount() > 0) {
        // output data of each row
        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
         $order = new Order($row["ID"],$row["CreationTime"],
         $row["ProcessedTime"],$row["CompletedTime"],$row["Status"]);
         $order->SetAddress($row["STREET"],$row["STREETNR"],$row["ZIPCODE"]);
         array_push($this->orders, $order);
        }
        return $this->orders;
      } else {
        return 0;
      }
    }

    public function CompleteOrder($OrderID)
    {
      $sql = "UPDATE foodorder SET Status = 3 WHERE ID = :orderID";
      $sth = $this->conn->prepare($sql);
      $sth->execute([
        ':orderID' => $OrderID
      ]);
    }  

    private function GetProducts($OrderID){
      $cart = new ShoppingCart();
      return $cart->GetOrders($OrderID);
    }

    
}

?>