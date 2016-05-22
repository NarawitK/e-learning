<?php
require_once '../model/checkStdEnroll.php';
include_once '../plugins/check_session.php';
$memID = $_SESSION["uid"];
$subID = $_GET["sub_code"];
$subName = $_GET["sub_name"];
$checkER_Status = checkEnroll($memID, $subID);
if($checkER_Status == TRUE){
    header("location:../controller/confirm_sub_reg.php?sub_code=$subID&sub_name=$subName");
/*    include_once '../view/header_logged.php';
    include_once '../view/stu_enroll.php';
    include_once '../view/footer.php'; */
}
else{
    echo "You are already Enrolled or you're subject creator,Section Part not ready. Redirect in 2 seconds";
    header("refresh:2; url=../index.php");
}
/*
        $result = enrollAdd($memID,$subID);
        if($result){
            echo '<script>alert("สมัครรายวิชา '.$subID.' เสร็จสิ้น")</script>';
            //header("refresh:2; url=../index.php");
        }
        else{
            echo '<script>alert("เกิดข้อผิดพลาดในการสมัคร")</script>';
        }
*/
