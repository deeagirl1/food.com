<?php
require_once('../classes/UserCollection.php');
require_once('../classes/ShoppingCart.php'); 
?> 

<?php
$users = new UserCollection();
$shoppingCart = new ShoppingCart();
 if(isset($_POST['email']) && isset($_POST['psw']))
{
    $username = $_POST['email'];
    $password = $_POST['psw'];
    
    $user = $users->isValid($username, $password); 
    if($user != null)
    {
        session_start();
        $_SESSION['ID'] = $user->GetID();
        $_SESSION['EMAIL'] = $user->GetEmail();
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