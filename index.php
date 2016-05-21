<?php
session_start();
if(!isset($_SESSION["uid"])){
    include_once './view/header.php';
    include_once './view/home.php';
    include_once './view/footer.php';
}
elseif(isset($_SESSION["uid"]) && !empty($_SESSION["uid"])){
    include_once './plugins/check_session.php';
    include_once './view/header_logged.php';
    include_once './view/Home_Logged.php';
    include_once './view/footer.php';
}
