<?php
require_once('../classes/UserCollection.php');
?>

<?php
$users = new UserCollection();

function CheckEmail($email) : bool {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
    }
    return true;
   }


if(isset($_POST['firstName']) &&
   isset($_POST['lastName']) &&
   isset($_POST['email']) &&
   isset($_POST['street']) &&
   isset($_POST['streetnr']) &&
   isset($_POST['zipcode']) &&
   isset($_POST['city']) &&
   isset($_POST['psw']) &&
   isset($_POST['psw_repeat'])
   )
    {
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $street = $_POST['street'];
        $streetnr = $_POST['streetnr'];
        $zipcode = $_POST['zipcode'];
        $city = $_POST['city'];
        $email = $_POST['email'];
        $psw = $_POST['psw'];
        $pswrepeat = $_POST['psw_repeat'];

        
        if($psw === $pswrepeat){
            if(CheckEmail($email)===true){
                $users->Add(new User(0,$email, $firstname, $lastname, $street, $streetnr, $zipcode, $city, $psw));
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
    } 
?>