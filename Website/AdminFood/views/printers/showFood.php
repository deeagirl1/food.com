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
      if($value->IsInStock() == 1){
         $inStock = 'Yes';
      }
      else  $inStock = 'No';

          echo '<div class="container">',
               '<form method="POST" action="phpScripts/removeFromStock.php">',
                  '<button type="submit" class="passwordbtn1">Sold Out</button>',
                  '<input type = "hidden" name = "ProductID" value ='."$ID".'>',
               '</form>',
               '<form method="POST" action="phpScripts/returnToStock.php">',
                  '<button type="submit" class="passwordbtn2">In Stock</button>',
                  '<input type = "hidden" name = "ProductID" value ='."$ID".'>',
               '</form>',

               '<h2>',"$name", "  $price",' €</h2><br>',
               '<h2>',"In stock: $inStock",'</h2><br>',
               '<h3>',"$description",'</h3>',
               '<h4></h4>',
               '</div>';
   } 
?>
