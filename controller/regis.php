<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../model/dbo.inc.php";
if(isset($_POST["submit_f"]) && $_POST["submit_f"]=="submitted"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $gender = $_POST["gender"];
    $tel = $_POST["telephone"];
    $email = $_POST["email"];
    $province = $_POST["province"];
    if($result = new_regis($username,$password,$name,$surname,$gender,$tel,$email,$province)){
        $user_info = get_user_info($name);
        $_SESSION["uid"] = $user_info->member_id;
        $_SESSION["name"] = $user_info->name;
        $_SESSION["sname"] = $user_info->surname;
        echo '<script>alert("การลงทะเบียนเสร็จสิ้น คุณ '.$_SESSION["name"].' '.$_SESSION["sname"].'")</script>';
    }
    else{
        echo "<script>alert('มีข้อผิดพลาดในการสมัครสมาชิก กรุณาลองใหม่อีกครั้ง')</script>";
    }
}
include "../view/header.php";
include_once "../view/register.php";
