<?php
require('handlers/isSessionValid.php');
require_once('classes/OrderCollection.php');
?>

<?php
    $CustomerID = $_SESSION['ID'];
    $orders = new OrderCollection();
    foreach($orders->GetOrders($CustomerID) as $var){
        $id = $var->GetID();
        $address = $var->GetAddress();
        $date = $var->GetTimeProcessed();
        $status = $var->GetStatus();

        echo '<form class="modal-content animate" action="/action_page.php" method="post">
                <div class="col-25">
                    <div class="container">';
                        require("showOrder.php");
        echo '</div></div>'; 
    } 
    
?>