<?php
require('isSessionValid.php');
require_once('../classes/UserCollection.php');
?>
<?php
$users = new UserCollection();


if(isset($_POST['psw']) &&
   isset($_POST['new-psw']) &&
   isset($_POST['psw-repeat'])
  )
    {
        $currentPassword = $_POST['psw'];
        $newPassword = $_POST['new-psw'];
        $repeatNewPassword = $_POST['psw-repeat'];
        $email = $_SESSION['EMAIL']; 

        if($newPassword === $repeatNewPassword)
        {
                if($users->ChangePassword($email, $currentPassword, $newPassword) == true){
                    $res = array(2);
                    echo json_encode($res);
                }
                else{
                    $res = array(1);
                    echo json_encode($res);
                }  
                return;
        }
        else{
            $res = array(0);
            echo json_encode($res);
        } 
}    
?>