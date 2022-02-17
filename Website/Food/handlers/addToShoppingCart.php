<?php
require('isSessionValid.php');
require_once('../classes/ShoppingCart.php');
?>

<?php
    $shoppingCart = new ShoppingCart();
    if(isset($_POST["ProductID"]))
    {
    $mealID = $_POST["ProductID"];
    $shoppingCart->AddProduct($mealID);
    }
?>