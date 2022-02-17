<?php
require_once('../classes/AdminCollection.php');
require_once('../classes/ShoppingCart.php'); 
?>

<?php
$admins = new AdminCollection();
$shoppingCart = new ShoppingCart();
 if(isset($_POST['email']) && isset($_POST['psw']))
{
    $username = $_POST['email'];
    $password = $_POST['psw'];
    
    $admin = $admins->isValid($username, $password); 
    if($admin != null)
    {
        session_start();
        $_SESSION['ID_ADM'] = $admin->GetID();
        $_SESSION['EMAIL'] = $admin->GetID();
        $shoppingCart->NewOrder();
        $res = array(true);
        echo json_encode($res);
    }
    else
    {
        $res = array(false);
        echo json_encode($res);
    } 
}  
?>