<?php
require('isSessionValid.php');
require_once('../classes/ShoppingCart.php');
?>

<?php
    $shoppingCart = new ShoppingCart();
    $id = $_SESSION['OrderID'];
    
    //Redirect to some payment service
    if($shoppingCart->GetCount($id)!=0){
        if(true){ // if payment succesfull then
            $shoppingCart->Proceed($id);
            $res = array(2);
            echo json_encode($res);
        }
        else{
            $res = array(1);
            echo json_encode($res);
        }
    }
    else{
        $res = array(0);
        echo json_encode($res);
    }
?>