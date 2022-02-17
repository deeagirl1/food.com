<?php
require('handlers/isSessionValid.php');
require_once('classes/ShoppingCart.php');
?>

<?php
    $shoppingCart = new ShoppingCart();
    $count = $shoppingCart->GetCount($id);
    $totalPrice = $shoppingCart->GetTotalPrice($id);
    $cart = $shoppingCart->GetFood($id);


   
    echo "<h4>Order id: $id <br> 
             Address: $address <br> 
             Date: $date <br> 
             Status : $status <br><br></f4>
             <span class='price' style='color:black'><i class='fa fa-shopping-cart'></i><b>$count</b></span></h4><br><hr><br>";
   if($cart!=0){
      foreach($cart as $value)
      {
      $name = $value->GetName();
      $description = $value->GetDescription();
      $price = $value->GetPrice();
      $quantity = $value->GetQuantity();
      echo "<p>$quantity X $name<span class='price'>€ $price</span></p> <br>";
      }
   }
   else echo "<p>Shopping cart is empty<br>";  
   echo "<hr><br><p>Total <span class='price' style='color:black'><b>€ $totalPrice</b></span></p>"; 
?>