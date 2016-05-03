<?php
if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
include '../model/dbo.inc.php';
include_once '../view/header.php';
if(isset($_POST["log_submit"]) && !empty($_POST["log_submit"])){
    $uname = $_POST["log_username"];
    $pwd = $_POST["log_pwd"];
    $login_res = login($uname,$pwd);
    if(is_object($login_res)){
        $_SESSION["uid"] = $login_res->member_id;
        $_SESSION["name"] = $login_res->name ;
        $_SESSION["sname"] = $login_res->surname; 
        if(!empty($_SESSION["uid"])){ //$_SESSION["uid"] != ""
            header("Location:../index.php");
        }
    }
    else{
        echo "<script>alert('Login Failed. Check your username and password')</script>";
    }
}
include_once '../view/login_page.html';
include_once '../view/footer.php';