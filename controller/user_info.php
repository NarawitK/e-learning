<?php
include_once '../model/dbo.inc.php';
include_once '../plugins/check_session.php';
include_once '../view/header_logged.php';
$memberID = $_SESSION["uid"];
$fetchUserInfo = get_user_info_byID($memberID);
if(!empty($_POST["submit_f"])){
    $memberID = $_POST["memberID"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $gender = $_POST["gender"];
    $tel = $_POST["telephone"];
    $email = $_POST["email"];
    $country = $_POST["province"];
    $update = update_userinfo($memberID, $gender, $name, $surname, $country, $tel, $email);
    if($update){
        $_SESSION["name"] = $name;
        $_SESSION["sname"] = $surname;
        echo '<script>alert("ปรับปรุงข้อมูลเสร็จสิ้น")</script>';
        echo header('refresh:1;url=#');
    }
    else{
        echo '<script>alert("เกิดปัญหาในการปรับปรุงข้อมูล")</script>';
    }
    
}
include_once '../view/userprofile.php';
include_once '../view/footer.php';
?>