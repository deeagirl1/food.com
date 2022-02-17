<?php
require('handlers/isSessionValid.php');
require_once('classes/Restaurant.php');
?>

<?php
    $restaurant = new Restaurant();
 
   foreach($restaurant->GetFood() as $value)
   {
      $name = $value->GetName();
      $description = $value->GetDescription();
      $price = $value->GetPrice();
      $ID = $value->GetID();

          echo '<div class="container">',
               '<form method="POST" action="handlers/addToShoppingCart.php" id="form">',
                  '<button type="submit" class="passwordbtn">Add</button>',
                  '<input type = "hidden" name = "ProductID" value ='."$ID".'>',
               '</form>',

               '<h2>',"$name", "  $price",' €</h2><br>',
               '<h3>',"$description",'</h3>',
               '<h4></h4>',
               '</div>';
   } 
    

?>
