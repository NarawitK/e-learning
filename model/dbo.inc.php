<?php
include_once "db_con.inc.php";
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
  $query = $dbh->query("SELECT * FROM member WHERE mmeber_id = '$id' ");
  $rc = $query->rowCount();
  if($rc<=0){
    return false;
  }
  else{
    return true;
  }
}
function get_user($id){
  global $dbh;
  if($query = $dbh->query("SELECT * FROM member WHERE mmeber_id = '$id' ")){
      return true;
  }
  else{
      return false;
  }

}
