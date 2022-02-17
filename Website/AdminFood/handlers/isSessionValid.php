<?php
    if(!session_id())
    {
        session_start();
    }
     if(!isset($_SESSION['ID_ADM']))
    {
        header('Location: login.php');
        exit;
    } 
?>