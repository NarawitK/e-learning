<?php
include_once '../plugins/check_session.php';
require_once '../model/db_subject.inc.php';
$memID = $_SESSION["uid"];
$subID = $_GET["sub_code"];
$subName = $_GET["sub_name"];
if(isset($_GET["confirm_sub_reg"])){
    $result = enrollAdd($memID,$subID);
    if($result){
        echo '<script>alert("Added")</script>';
        header('refresh:1; url=../index.php');
    }
    else{
        echo '<script>alert("Problem")</script>';
        header('refresh:1; url=../index.php');
    }
    
}
else{
    include_once '../view/header_logged.php';
    include_once '../view/stu_enroll.php';
    include_once '../view/footer.php';   
}