<?php
require_once 'config_db.php';


$username = $_POST['username'];
if (isset($_POST))
{
    print("Имя: " . $_POST['username']);
//    if($username == 'Admin'){
//        header ('Location: personal_area.php');
//        exit();
//    }

}
?>

