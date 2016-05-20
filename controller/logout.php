<!DOCTYPE html>
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/e-learning/plugins/logout.inc.php";
require_once $path;
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
            echo "กำลังทำการออกจากระบบ โปรดรอสักครู่";
            header("refresh:3; url=/e-learning/index.php");
        }
        else{
            header('Location:'. $_SERVER['HTTP_REFERER']);
        }
        ?>
    </body>
</html>
