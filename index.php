<?php
    ob_start();

    session_start();

    include 'config_db.php';
    include 'markup/login.php';
    if($_SESSION['username']){
        include 'markup/personal_area.php';
    }
    elseif(isset($_GET['login'])){
        include 'scripts/login.php';
    }
    elseif(isset($_GET['registration'])){
    include 'scripts/registration.php';
}

?>
