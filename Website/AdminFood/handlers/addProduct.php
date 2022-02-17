<?php
require('isSessionValid.php');
require_once('../classes/Restaurant.php');
?>

<?php
    $Restaurant = new Restaurant();
    if(isset($_POST["Name"]) && isset($_POST["Description"]) && isset($_POST["Price"]))
    {
    $Name = $_POST["Name"];
    $Description = $_POST["Description"];
    

    if(is_numeric($_POST["Price"])){
        $Price = $_POST["Price"];
    }
    else $Price = 0;

    $Food = new Food($Name, $Description, $Price);

    $Restaurant->AddFood($Food);
    $res = array(true);
    echo json_encode($res);
    }
?>