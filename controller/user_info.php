<?php
include_once '../model/dbo.inc.php';
include_once '../plugins/check_session.php';
include_once '../view/header_logged.php';
$memberID = $_SESSION["uid"];
$fetchUserInfo = get_user_info_byID($memberID);
/*if(!empty($_POST["submit_f"])){
    
}*/
include_once '../view/userprofile.php';
include_once '../view/footer.php';
?>