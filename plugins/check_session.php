<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION) && !empty($_SESSION["uid"])){
/*include "../model/dbo.inc.php";
$id = 1; //$_SESSION["uid"]
$fetch = get_user_info_byID($id); รออะไรเพิ่มเติมก่อน เขียนเป็นแม่แบบไว้ */ 
}
else{
  echo '<script>alert("ท่านยังไม่ได้ทำการล็อคอิน หรือ ไม่มีสิทธิ์เข้าถึงเพจนี้")</script>';
  die(header("Refresh:0; url=/e-learning/index.php"));
}
 ?>
