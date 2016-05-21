<?php
include_once '../model/db_subject.inc.php';
include_once '../plugins/check_session.php';
include_once '../view/header_logged.php';
include_once '../view/add_subgroup.php';
include_once '../view/footer.php';
if(isset($_POST["addSubGroupSubmit"])){
    $getAddSubID = $_POST["addSubGroupID"];
    $getAddSubName = $_POST["addSubGroupName"];
    if($result =  addSubGroup($getAddSubID,$getAddSubName)){
        echo '<script>alert("เพิ่มหมวดหมู่วิชาเสร็จสิ้น");</script>'; 
        echo "<meta http-equiv=\"refresh\" content=\"0\">";
    }
    else{
        echo '<script>alert("เกิดข้อผิดพลาดในการเพิ่มหมวดหมู่วิชา");</script>'; 
    }
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

