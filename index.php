<?php
session_start();
if(!isset($_SESSION["uid"])){
    include './view/header.php';
    include './view/home.php';
    include './view/footer.php';
}
elseif(isset($_SESSION["uid"]) && !empty($_SESSION["uid"])){
    include './view/header_logged.php';
    include './view/home.php';
    include './view/footer.php';
}
