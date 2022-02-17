<?php
require('isSessionValid.php');
require_once('../classes/Restaurant.php');
?>

<?php
    $Restaurant = new Restaurant();
    if(isset($_POST["ProductID"]))
    {
    $ID = $_POST["ProductID"];   
    $Restaurant->ReturnToStock($ID);
    }
?>