<?php
//This script is for database handler for subject operation
include "db_con.inc.php";
function getSubjectList($keyword){
    global $dbh;
    $query = $dbh->query("SELECT title FROM subject WHERE title like '".$keyword."%' ORDER BY title");
    if(!empty($query)){
        $fetchList = $query->fetchAll(PDO::FETCH_ASSOC);
        return $fetchList;   
    }  
}
function checkSubCode($code){
    global $dbh;
    $query = $dbh->query("SELECT subject_code FROM subject WHERE subject_code = '$code'");
    if($query->rowCount() >0){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
function getSubGroupLatestID(){
    global $dbh;
    $query = $dbh->query("SELECT group_id FROM sub_group ORDER BY group_id DESC LIMIT 1");
    if($query->rowCount() >0){
        $res = $query->fetch(PDO::FETCH_OBJ);
        return $res->group_id;
    }
    else{
        return "0";
    }
}

function checkSubGroupDup($name){
    global $dbh;
    $query = $dbh->query("SELECT * FROM sub_group WHERE group_name ='$name'");
    if($query->rowCount() >0){
        return true;
    }
    else{
        return false;
    }
    
}

function getSubGroupList(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM sub_group");
    if($query->rowCount() >0){
        $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
        return $fetch;
    }
    else{
        return FALSE;
    }
}  

function addSubGroup($id,$name){
    global $dbh;
    $query = $dbh->query("SELECT * FROM sub_group WHERE group_id = '$id' && group_name = '$name' ");
    if($query->rowCount() <=0){
        $result = $dbh->exec("INSERT INTO sub_group(group_id,group_name) VALUES ('$id','$name')");
        if($result){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    else{
        return FALSE;
    }
    
}

function addSubject($subCode,$subGroup,$title,$subTitle,$userID){
    global $dbh;
    $query = $dbh->query("SELECT subject_code FROM subject WHERE subject_code = '$subCode'");
    if($query->rowCount()>0){
        return False; //ซ้ำจบ
    }
    else{
        if($result = $dbh->exec("INSERT INTO subject(subject_code,group_id,title,subtitle) VALUES ('$subCode','$subGroup','$title','$subTitle')")){
            $dbh->exec("INSERT INTO enrollment(member_id,subject_code,type) VALUES ('$userID','$subCode','Creator')");
            return TRUE;
        }
    }   
}   
function getSubjectIndex(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM subject,sub_group WHERE subject.group_id = sub_group.group_id ORDER BY subject.group_id ASC" );
    if($query->rowCount() >0){
        $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
        return $fetch;
    }
    else{
        return FALSE;
    }
}
function getCreatorName($subID){
    global $dbh;
    $query = $dbh->query("SELECT * FROM subject,enrollment,member WHERE member.member_id = enrollment.member_id AND subject.subject_code = '$subID' AND subject.subject_code = enrollment.subject_code AND enrollment.type = 'Creator'");
    if($query->rowCount() >0){
        $fetch = $query->fetch(PDO::FETCH_OBJ);
        return $fetch;
    }
    else{
        echo '<script>alert("Cannot Q")</script>';
    }
}
function getSubEnroll($subID){
    global $dbh;
    $query = $dbh->query("SELECT * FROM enrollment WHERE subject_code = '$subID' AND type= 'Student'");
    return $query->rowCount();  
}
function enrollAdd($uid,$subID){
    global $dbh;
    $added = $dbh->exec("INSERT INTO enrollment(member_id,subject_code,type) VALUES ('$uid','$subID','Student')");
    if($added){
        return TRUE;
    }
    else{
        return FALSE;
    }
}