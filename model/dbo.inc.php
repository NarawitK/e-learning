<?php
include_once "db_con.inc.php";
function login($user,$pwd){
    global $dbh;
    $query = $dbh->query("SELECT * FROM member WHERE username = '$user' AND password = '$pwd' ");
    $rc = $query->rowCount();
    if($rc <= 0){
        return false;
    }
    else{
      $fetch_info = $query->fetch(PDO::FETCH_OBJ);
      return $fetch_info;
    }
}
function new_regis($user,$pass,$name,$sname,$gender,$tel,$email,$province){
  global $dbh;
  $query = $dbh->query("SELECT * FROM member WHERE username = '$user' ");
  $rc = $query->rowCount();
  if($rc > 0){
    return false;
  }
  else{
   if($insert = $dbh->exec("INSERT INTO member(username,password,gender,name,surname,country,tel,email) VALUES ('$user','$pass','$gender','$name','$sname','$province','$tel','$email')")){
       return true;
    }
    else{
    return false;
    }
  }
}
function checkuser($id){
  global $dbh;
  $query = $dbh->query("SELECT * FROM member WHERE member_id = '$id' ");
  $rc = $query->rowCount();
  if($rc<=0){
    return false;
  }
  else{
    return true;
  }
}
function checkCreator($uid,$subcode){
    global $dbh;
    $query = $dbh->query("SELECT * FROM enrollment WHERE (member_id = '$uid' AND subject_code = '$subcode') AND type='Creator'");
    if($query->rowCount() >0){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
function get_user_info($name){ //Get info for newly regis member
    global $dbh;
    if($query = $dbh->query("SELECT * FROM member WHERE name = '$name' LIMIT 1")){
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    else{
        return false;
    }
}
function get_user_info_byID($id){ //Get info for newly regis member
    global $dbh;
    if($query = $dbh->query("SELECT * FROM member WHERE member_id = '$id' LIMIT 1")){
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    else{
        return false;
    }
}
function update_userinfo($uid,$gender,$name,$sname,$country,$tel,$email){
    global $dbh;
    $query = $dbh->query("SELECT * FROM member WHERE member_id = '$uid' LIMIT 1");
    $rc = $query->rowCount();
    if($rc > 0){
        if($res = $dbh->exec("UPDATE member SET gender='$gender',name='$name',surname='$sname',country='$country',tel='$tel',email='$email' WHERE member_id='$uid'")){
            return true;
        }
        else{
            return FALSE;
        }
    }
    else{
        return -1;
    }

}
