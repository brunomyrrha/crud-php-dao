<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/Controller/Database.php");
    require_once ($_SERVER['DOCUMENT_ROOT']."/Model/BO/UserBO.php");
    
    if (!isset($_SESSION))
    {
        session_start();
    }
    
    $con = new Database();
    $_SESSION['database'] = $con;
    $userBO = new UserBO();
    $userBO->checkLogin($_POST['username'],$_POST['password']);
?>