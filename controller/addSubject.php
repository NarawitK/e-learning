<?php
include_once "../model/db_subject.inc.php";
include "../plugins/check_session.php";
include "../view/header_logged.php";
include_once '../view/add_subject.php';
include '../view/footer.php';
if(isset($_POST["add_submit"]) && !empty($_POST["add_submit"])){
    $subCode = $_POST["add_sub_code"];
    $title = $_POST["add_sub_title"];
    $subGroup = $_POST["add_subgroup"];
    $subTitle = $_POST["add_sub_stitle"];
    $memberID = $_POST["add_memberid"];
    if($result = addSubject($subCode, $subGroup, $title, $subTitle, $memberID)){
       echo '<script>alert("บันทึกวิชาเรียบร้อย");</script>'; 
    }
    else{
        echo '<script>alert("ไม่เรียบร้อย");</script>'; 
    }
        
    
    
}
