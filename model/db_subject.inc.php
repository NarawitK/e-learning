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

function getSubGroup(){
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

function addSubject($subCode,$subGroup,$title,$subTitle,$userID){
    global $dbh;
    $query = $dbh->query("SELECT subject_code FROM subject WHERE subject_code = '$subCode'");
    if($query->rowCount()>0){
        return False; //ซ้ำจบ
    }
    else{
        if($result = $dbh->exec("INSERT INTO subject(subject_code,group_id,title,subtitle) VALUES ('$subCode','$subGroup','$title','$subTitle')")){
            $res = $dbh->exec("INSERT INTO enrollment(member_id,subject_code,type) VALUES ('$userID','$subCode','Creator')");
            return TRUE;
        }
    }   
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

