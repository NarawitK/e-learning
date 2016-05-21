<?php
require_once '../plugins/checkStdEnroll.php';
include_once '../plugins/check_session.php';
$memID = $_SESSION["uid"];
$subID = $_GET["sub_code"];
if(checkEnroll($memID, $subID) === TRUE){
    include_once '../view/header_logged.php';
    include_once '../view/stu_enroll.php';
    include_once '../view/footer.php';
    
}
else{
    echo "ทำหน้าลงทะเบียนแปป";
    header("refresh:2; url=../index.php");
}
