<?php
require('handlers/isSessionValid.php');
require_once('classes/OrderCollection.php');
?>

<?php
    $orders = new OrderCollection();
    foreach($orders->GetOrders() as $var){
        $id = $var->GetID();
        $address = $var->GetAddress();
        $date = $var->GetTimeProcessed();
        $status = $var->GetStatus();

         echo '<div class="col-25">
               <div class="container">',
               '<form method="POST">',
                   '<br><button type="submit" class="completeBtn">Complete</button><br><br>',
                    '<input type = "hidden" name = "ProductID" value ='."$id".'>'.(require("showOrder.php")).
                '</div></div></form>';          
    } 
    
?>