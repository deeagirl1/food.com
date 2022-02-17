<?php
require('isSessionValid.php');
require_once('../classes/OrderCollection.php');
?>

<?php
    $orders = new OrderCollection();
    if(isset($_POST["ProductID"]))
    {
    $ID = $_POST["ProductID"];   
    $orders->CompleteOrder($ID);
    }
?>