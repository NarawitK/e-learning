<?php
include_once '../model/db_subject.inc.php';
include_once '../model/dbo.inc.php';
function checkEnroll($uid,$subID){
    global $dbh;
    $query = $dbh->query("SELECT * FROM enrollment WHERE member_id = '$uid' AND subject_code = '$subID'");
    if($query->rowCount()<=0){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
function enrollAdd($uid,$subID){
    global $dbh;
    if(checkEnroll($uid, $subID)){
        $added = $dbh->exec("INSERT INTO enrollment(member_id,subject_code,type) VALUES ('$uid','$subID','Student')");
        if($added){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}


