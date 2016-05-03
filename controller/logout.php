<!DOCTYPE html>
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/e-learning/plugins/logout.inc.php";
include $path; //Will change to path to script soon
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logging out...</title>
    </head>
    <body>
        <?php
        $respond = logout();
        if($respond == TRUE){
            echo "กำลัง Logout... โปรดรอสักครู่";
            header("refresh:3; url=/e-learning/index.php");
        }
        else{
            header('Location:'. $_SERVER['HTTP_REFERER']);
        }
        ?>
    </body>
</html>
