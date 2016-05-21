<?php
include_once '../model/db_subject.inc.php';
include_once '../model/dbo.inc.php';
function checkEnroll($uid,$subID){
    global $dbh;
    $query = $dbh->query("SELECT * FROM enrollment WHERE member_id = '$uid' AND subject_code = '$subID' AND (type = 'Student' OR type = 'Creator') ");
    if($query->rowCount() <=0){
        return TRUE; //ถ้ายังไม่เคยลงวิชา ส่ง true
    }
    else{
        return FALSE; //เคยลงหรือเป็นเจ้าของผลงานแล้วส่ง False
    }
}

