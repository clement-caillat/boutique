<?php
    require_once('admin/libraries/Product.php');
    require_once('libraries/User.php');
    session_start();
    if(isset($_SESSION['user']) && isset($_GET['d'])){
        $_SESSION['user']->disconnect();
        header('Location: index.php');
    }
    if(isset($_SESSION['user'])){
        $_SESSION['user']->getCart();
        $_SESSION['cartamount'] = sizeof($_SESSION['user']->cart);
        $_SESSION['user']->getInfosofUser();
    }
?>